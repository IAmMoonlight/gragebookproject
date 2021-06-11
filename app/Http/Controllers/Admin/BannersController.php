<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannersRequest;
use App\Models\Banner;
use App\Services\AttachmentService;
use App\Services\BannersService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannersController extends Controller
{

    public function index()
    {
    	$banners = Banner::orderBy('created_at', 'DESC')->get();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(BannersRequest $request)
    {
		(new BannersService())->store($request);
        return redirect()->route('account.banners.index');
    }

    public function edit($id)
    {
    	$banner = Banner::find($id);
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(BannersRequest $request, $id)
    {
		(new BannersService())->update($request, $id);
        return redirect()->route('account.banners.index');
    }

    public function destroy($id)
    {
		(new BannersService())->remove($id);

		return redirect()->route('account.banners.index');
    }
}
