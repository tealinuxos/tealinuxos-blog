<?php namespace App\Http\Controllers;

use App\Bugs;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BugController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$bugs = Bugs::paginate(7);
		return view('blog.reportall')->withBugs($bugs);
	}

	public function desktop(){
		$bugs = Bugs::paginate(7);
		return view('blog.desktop')->withBugs($bugs);
	}

	public function desktopstore(Request $request)
	{
		$bug = new Bugs();
		$bug->nama = $request->get('nama');
		$bug->email =$request->get('email');
		$bug->judul_bug = $request->get('judul_bug');
		$bug->slug = str_slug($bug->judul_bug);
		$bug->bug = $request->get('bug');
		$penamaan_gambar = substr(str_shuffle(str_repeat("01123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 3);
		$imageName = $penamaan_gambar. '.' . $request->file('foto')->getClientOriginalExtension();
		$bug->foto = $imageName;
		$bug->status = 'uncheck';
		$bug->save();
		$request->file('foto')->move(
			base_path() . '/public/images/uploads/', $imageName
		);
		$message = 'Laporan sudah terkirim';
		return redirect('/desktop/lapor/terimakasih')->withMessage($message);
	}
	public function desktoplist(){
		$bugs = Bugs::paginate(7);
		return view('blog.listdesktop')->withBugs($bugs);

	}
	public function showlist($slug)
	{
		$bug = Bugs::where('slug',$slug)->first();
		return view('blog.readmorelist')->withBug($bug);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$bug = Bugs::paginate(7);
		return view('blog.report')->withBug($bug);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$bug = new Bugs();
		$bug->nama = $request->get('nama');
		$bug->email =$request->get('email');
		$bug->judul_bug = $request->get('judul_bug');
		$bug->slug = str_slug($bug->judul_bug);


		$bug->bug = $request->get('bug');
		$penamaan_gambar = substr(str_shuffle(str_repeat("01123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 3);
		$imageName = $penamaan_gambar. '.' . $request->file('foto')->getClientOriginalExtension();
		$bug->foto = $imageName;
		$bug->status ='uncheck';
		$bug->save();
		$request->file('foto')->move(
			base_path() . '/public/images/uploads/', $imageName
		);
		$message = 'Laporan sudah terkirim';
		return redirect('/lapor/terimakasih')->withMessage($message);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$bug = Bugs::where('slug',$slug)->first();

		return view('blog.readmorebug')->withBug($bug);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$bug = Bugs::where('id',$id)->first();

		return view('blog.editlapor')->withBug($bug);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updatestatus(Request $request){
		$bug_id = $request->get('id');
		$bug = Bugs::find($bug_id);
		$bug->status = $request->get('status');
		$bug->save();

		return redirect('/lapor');
	}
	public function update(Request $request)
	{
		$bug_id = $request->get('id');
		$bug = Bugs::find($bug_id);
		$bug->nama = $request->get('nama');
		$bug->email = $request->get('email');
		$bug->judul_bug = $request->get('judul_bug');
		$bug->slug = str_slug($bug->judul_bug);
		$bug->bug = $request->get('bug');
		$penamaan_gambar = substr(str_shuffle(str_repeat("01123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 3);
		$imageName = $penamaan_gambar. '.' . $request->file('foto')->getClientOriginalExtension();
		$bug->foto = $imageName;
		$bug->status = 'uncheck';
		$bug->save();

		$request->file('foto')->move(
			base_path() . '/public/images/uploads/', $imageName
		);

		return redirect('/reportall');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request,$id)
	{
		$bug=  Bugs::find($id);

		$bug->delete();

		return redirect('/reportall');



	}

}
