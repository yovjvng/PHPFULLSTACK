<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // --------------
        // 쿼리 빌더
        // --------------
        // select
        // $result = DB::select('SELECT * FROM categories');
        // $no = '5';
        // $result = DB::select(
        //     'SELECT * FROM categories WHERE no = :no'
        //     , ['no' => $no]
        // );
        // 두번째 방법
        // $result = DB::select(
        //     'SELECT * FROM categories WHERE no = ? and no = ?'
        //     , [$no, 7]
        // );


        $input = ['4', '7', '8']; // categories의 no 컬럼
        // 게시글 번호, 게시글 제목, 카테고리명을 출력해 주세요. (게시글 번호로 오름차순 정렬 후 상위 5개만)
        // $result = DB::select(
        //     'SELECT bo.bno, bo.btitle, cat.name
        //     FROM categories cat
        //         INNER JOIN boards bo
        //                 ON bo.category = cat.no
        //     WHERE bo.category in (?, ?, ?)
        //     ORDER BY bo.bno ASC
        //     LIMIT 5 ', $input
        // );
        // inner join 두번재 방법
        // $result2 = DB::select(
        //     'SELECT bo.bno, bo.btitle, cat.name
        //     FROM categories cat, boards bo
        //     WHERE bo.category = cat.no AND (?, ?, ?)
        //     ORDER BY bo.bno ASC
        //     LIMIT 5 ', $input
        // );


        // insert
        // $result = DB::insert('INSERT INTO boards (category, btitle, bcontent, created_at ,updated_at)
        //                     VALUES (:category, :btitle, :bcontent, NOW(), NOW())'
        //                     , [
        //                         'category' => '5'
        //                         , 'btitle' => '제목'
        //                         , 'bcontent' => '내용'
        //                     ]
        //                     );

        // 방금 등록한 게시글의 제목 : test, 내용 : testtest로 변경해 주세요.

        // update
        // $result = DB::update('UPDATE boards SET btitle = :btitle, bcontent = :bcontent, updated_at = NOW() WHERE bno = :bno'
        //                     , [
        //                         'btitle' => 'test'
        //                         , 'bcontent' => 'testtest'
        //                         , 'bno' => '20002'
        //                     ]
        //                     );

        // delete
        // $result = DB::delete('DELETE FROM boards where bno in(?, ?)', [20001, 20002]);


        // --------------
        // 쿼리 빌더 체이닝
        // --------------
        $no = '5';
        // SELECT * FROM categories WHERE no = :no
        // $result = DB::table('categories')->where('no', '=', $no)->get(); // ex) TODO: 삭제예정 ( dd()- return까지 가지 않고 끝내준다. )

        // SELECT * FROM categories WHERE no = ? or no = ?
        $no1 = '5';
        $no2 = '8';
        // $result = DB::table('categories')->where('no', $no1)->orwhere('no', $no2)->get();

        // SELECT * FROM categories WHERE no IN (? ,?)
        // $result = DB::table('categories')->whereIn('no', [$no1, $no2])->get();
        
        // SELECT * FROM categories WHERE no NOT IN (5 ,8)
        // $result = DB::table('categories')->whereNotIn('no', [$no1, $no2])->dd();

        // SELECT id, no, name FROM categories
        // $result = DB::table('categories')
        //     ->select('id', 'no', 'name')
        //     ->dd();
        
        // SELECT id, no, name FROM categories order by name desc
        // $result = DB::table('categories')
            // ->select('id', 'no', 'name')
            // ->orderBy('name', 'desc')
            // ->dd(); // dd() ---> 쿼리와 바인딩된 값들만 찍어주고 종료

        // SELECT * FROM categories WHERE no = ? and no = ?
        // $result = DB::table('categories')->where('no', '=' , $no1)->where('no', '=' , $no2)->get();

        // *** 주의해서 사용(사용 안하는 걸 추천) *** whereRaw()
        // $result = DB::table('categories')->whereRaw('no = '.$no1);

        // first() : Limit 1과 비슷한 작동, 실패 시 false 리턴
        // $result = DB::table('boards')->orderBy('bno', 'desc')->first();

        // firstOrFail() : first() 같은 동작을 하는데, 실패 시 결과가 예외 발생(엘로퀀트 모델 객체에서만 사용 가능)
        // $result = DB::table('boards')->orderBy('bno', 'desc')->firstOrFail();

        // 집계 메소드
        // $result = DB::table('boards')->count(); // 결과의 레코드수를 반환
        // $result = DB::table('boards')->max('bno'); // 해당 컬럼의 최대치를 반환

        // 트렌잭션
        // DB::beginTransaction(); // 트렌잭션 시작
        // DB::rollback(); // 롤백
        // DB::commit(); // 커밋

        
        // 카테고리가 활성화 되어 있는 게시글의 카테고리 별 갯수를 출력해 주세요.
        // 카테고리 번호, 카테고리명, 갯수
        $result = DB::table('categories as c')
                ->select('c.no', 'c.name', DB::raw('count(*) as cnt'))
                ->join('boards as b', 'b.category', '=', 'c.no')
                ->where('c.active_flg', '1')
                ->groupBy('c.no','c.name') // 라라벨 체이닝 기능 사용 할 때 groupBy에는 select 구문에 사용하는 값 모두 적기
                ->get();

        return var_dump($result);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
