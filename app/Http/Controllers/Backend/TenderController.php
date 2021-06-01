<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\Controller;
use App\Models\Tender;
use App\Models\TenderRequest;
use Illuminate\Http\Request;
use Session;

class TenderController extends Controller
{
    public function index()
    {
    	$tenders = Tender::orderBy('id', 'DESC')->get();
    	return view('backend.pages.tender.index', compact('tenders'));
    }

    public function delete(Request $request, $id)
    {
    	$tender = Tender::find($id);
    	if($tender->image){
    		ImageUploadHelper::delete('public/images/tenders/',$tender->image);
    	}
    	TenderRequest::where('tender_id')->delete();
        $tenderRequest = TenderRequest::where('tender_id', $id)->delete();
    	$tender->delete();
    	session()->flash('error', 'Tender deleted');
    	return back();
    }
}
