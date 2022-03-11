<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ClientBanner;
use App\Models\Portfolio;
use App\Models\Services;
use App\Models\FormContact;
use App\Models\InformationCompany;
use App\Models\Layanan;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $information_company = InformationCompany::get();
        $aboute = About::orderBy('updated_at', 'DESC')->paginate(1);
        $layanan = Layanan::orderBy('updated_at', 'DESC')->paginate(2);
        $services = Services::orderBy('updated_at', 'DESC')->paginate(6);
        $clients_banner = ClientBanner::orderBy('updated_at', 'DESC')->paginate(6);
        $portfolio = Portfolio::orderBy('updated_at', 'DESC')->paginate(6);
        return view('web.home', compact('information_company', 'aboute', 'layanan', 'services', 'clients_banner', 'portfolio'));
    }

    public function getViewProject($id)
    {
        $information_company = InformationCompany::get();
        $view_portfolio = Portfolio::findOrfail($id);
        return view('web.portfolio-details', compact('view_portfolio', 'information_company'));
    }

    public function contactDownloadCatalog(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'number_phone' => 'required|max:100',
            'subject' => 'required|max:100',
            'messaga' => 'required|max:200',
        ]);

        $portfolio =  new FormContact();
        $portfolio->name = $request->name;
        $portfolio->email = $request->email;
        $portfolio->number_phone = $request->number_phone;
        $portfolio->subject = $request->subject;
        $portfolio->messaga = $request->messaga;
        $portfolio->save();
        return redirect()->route('home.contact')->with('success', 'Download Catalog Success, Check Folder Download');
    }

    public function getDownloadCatalog()
    {
        $filePath = public_path('assets/pdf/catalog.pdf');
        $headers = ['Content-Type: application/pdf'];
        $fileName = time() . '_catalog.pdf';

        return response()->download($filePath, $fileName, $headers);
    }
}
