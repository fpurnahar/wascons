<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ClientBanner;
use App\Models\FormContact;
use App\Models\InformationCompany;
use App\Models\Layanan;
use App\Models\Portfolio;
use App\Models\Services;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    /* ========================== Information ========================== */
    public function getInformationCompany()
    {
        $info_company = InformationCompany::orderBy('id')->paginate(1);
        return view('pages.information.list', compact('info_company'));
    }
    public function editInformationCompany($id)
    {
        $edit_information = InformationCompany::findOrfail($id);
        return view('pages.information.edit', compact('edit_information'));
    }
    public function updateInformationCompany(Request $request, $id)
    {
        $request->validate([
            'company_name' => 'required',
            'company_address' => 'required',
            'company_number_phone' => 'required',
            'company_facebook' => 'required',
            'company_instagram' => 'required',
            'company_linkedin' => 'required',
            'company_logo' => 'required|mimes:jpg,jpeg,png,svg',
            'company_pdf' => 'required|mimetypes:application/pdf',
        ]);

        $information_update = InformationCompany::findOrfail($id);
        $information_update->company_name = $request->company_name;
        $information_update->company_address = $request->company_address;
        $information_update->company_number_phone = $request->company_number_phone;
        $information_update->company_facebook = $request->company_facebook;
        $information_update->company_instagram = $request->company_instagram;
        $information_update->company_linkedin = $request->company_linkedin;
        if ($request->hasFile('company_logo')) {
            $oldImage = public_path() . $information_update->company_logo;
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
            $update_logo_company = $request->company_logo;
            $filename = 'logo_company.' . $update_logo_company->getClientOriginalExtension();
            $destinationPath = public_path() . '/assets/img/logo/';
            $update_logo_company->move($destinationPath, $filename);
            $information_update->company_logo = '/assets/img/logo/' . $filename;
        }

        if ($request->hasFile('company_pdf')) {
            $oldPDF = public_path() . $information_update->company_pdf;
            if (file_exists($oldPDF)) {
                unlink($oldPDF);
            }
            $update_company_pdf = $request->company_pdf;
            $filePDF = 'catalog.' . $update_company_pdf->getClientOriginalExtension();
            $destinationPathPDF = public_path() . '/assets/pdf/';
            $update_company_pdf->move($destinationPathPDF, $filePDF);
            $information_update->company_pdf = '/assets/pdf/' . $filePDF;
        }

        $information_update->save();
        return redirect()->route('list.company.infmation')->with('success', 'Update Success');
    }
    /* ========================== End Information ========================== */

    /* ========================== Aboute ========================== */

    public function indexAbout()
    {
        $about = About::orderBy('updated_at', 'DESC')->paginate(5);
        return view('pages.aboute.list', compact('about'));
    }

    public function editAbout($id)
    {
        $result = About::findOrFail($id);
        return view('pages.aboute.edit', compact('result'));
    }

    public function updateAbout(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,svg',
        ]);

        $aboute = About::findOrfail($id);
        $aboute->title = $request->title;
        $aboute->description = $request->description;

        if ($request->hasFile('image')) {
            $oldImage = public_path() . $aboute->image;
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
            $fotoAboute = $request->image;
            $filename = time() . '_image_about.' . $fotoAboute->getClientOriginalExtension();
            $destinationPath = public_path() . '/assets/img/about/';
            $fotoAboute->move($destinationPath, $filename);
            $aboute->image = '/assets/img/about/' . $filename;
        }
        $aboute->save();
        return redirect()->route('list')->with('success', 'Update Success');
    }
    /* ========================== End Aboute ========================== */

    /* ========================== Layanan ========================== */

    public function indexLayanan()
    {
        $layanan = Layanan::orderBy('updated_at', 'DESC')->paginate(2);
        return view('pages.layanan.list', compact('layanan'));
    }

    public function editLayanan($id)
    {
        $layanan_edit = Layanan::findOrFail($id);
        return view('pages.layanan.edit', compact('layanan_edit'));
    }

    public function updateLayanan(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,svg',
        ]);

        $layanan_update = Layanan::findOrfail($id);
        $layanan_update->title = $request->title;
        $layanan_update->description = $request->description;

        if ($request->hasFile('image')) {
            $oldImage = public_path() . $layanan_update->image;
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
            $fotoLayanan = $request->image;
            $filename = time() . '_image_layanan.' . $fotoLayanan->getClientOriginalExtension();
            $destinationPath = public_path() . '/assets/img/layanan/';
            $fotoLayanan->move($destinationPath, $filename);
            $layanan_update->image = '/assets/img/layanan/' . $filename;
        }
        $layanan_update->save();
        return redirect()->route('list.layanan')->with('success', 'Update Success');
    }
    /* ========================== End Layanan ========================== */

    /* ========================== Services ========================== */

    public function indexServices()
    {
        $services = Services::orderBy('updated_at', 'DESC')->paginate(6);
        return view('pages.services.list', compact('services'));
    }

    public function editServices($id)
    {
        $edit_services = Services::findOrFail($id);
        return view('pages.services.edit', compact('edit_services'));
    }

    public function updateServices(Request $request, $id)
    {
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $services = Services::findOrfail($id);
        $services->icon = $request->icon;
        $services->title = $request->title;
        $services->description = $request->description;
        $services->save();
        return redirect()->route('list.services')->with('success', 'Update Success');
    }
    /* ========================== End Services ========================== */

    /* ========================== Portfolio ========================== */
    public function indexPortfolio()
    {
        $portfolio = Portfolio::orderBy('updated_at', 'DESC')->paginate(5);
        return view('pages.portfolio.list', compact('portfolio'));
    }

    public function createPortfolio()
    {
        return view('pages.portfolio.create');
    }

    public function storePortfolio(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:100',
            'client' => 'required|min:5|max:100',
            'category' => 'required|min:5|max:100',
            'project_date' => 'required|date',
            'description' => 'required|min:10|max:500',
            'image' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
            'image_2' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
            'image_3' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
        ]);

        $portfolio =  new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->client = $request->client;
        $portfolio->category = $request->category;
        $portfolio->project_date = $request->project_date;
        $portfolio->description = $request->description;
        if ($request->hasFile('image')) {
            $fotoPortfolio = $request->image;
            $filename = time() . '_image_portfolio_thumbnails.' . $fotoPortfolio->getClientOriginalExtension();
            $destinationPath = public_path() . '/assets/img/portfolio-thumbnails/';
            $fotoPortfolio->move($destinationPath, $filename);
            $portfolio->image = '/assets/img/portfolio-thumbnails/' . $filename;
        }
        if ($request->hasFile('image_2')) {
            $fotoPortfolio = $request->image_2;
            $filename = time() . '_image_portfolio_detail_2.' . $fotoPortfolio->getClientOriginalExtension();
            $destinationPath = public_path() . '/assets/img/portfolio-detail-2/';
            $fotoPortfolio->move($destinationPath, $filename);
            $portfolio->image_2 = '/assets/img/portfolio-detail-2/' . $filename;
        }
        if ($request->hasFile('image_3')) {
            $fotoPortfolio = $request->image_3;
            $filename = time() . '_image_portfolio_detail_3.' . $fotoPortfolio->getClientOriginalExtension();
            $destinationPath = public_path() . '/assets/img/portfolio-detail-3/';
            $fotoPortfolio->move($destinationPath, $filename);
            $portfolio->image_3 = '/assets/img/portfolio-detail-3/' . $filename;
        }
        $portfolio->save();
        return redirect()->route('list.portfolio')->with('success', 'You Have Been Added Portfolio.');
    }

    public function editPortfolio($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('pages.portfolio.edit', compact('portfolio'));
    }

    public function updatePortfolio(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5|max:100',
            'client' => 'required|min:5|max:100',
            'category' => 'required|min:5|max:100',
            'project_date' => 'required|date',
            'description' => 'required|min:10|max:500',
            'image' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
            'image_2' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
            'image_3' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
        ]);

        $portfolio = Portfolio::findOrfail($id);
        $portfolio->title = $request->title;
        $portfolio->client = $request->client;
        $portfolio->category = $request->category;
        $portfolio->project_date = $request->project_date;
        $portfolio->description = $request->description;
        if ($request->hasFile('image')) {
            $oldImage = public_path() . $portfolio->image;
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
            $fotoPortfolio = $request->image;
            $filename = time() . '_image_portfolio.' . $fotoPortfolio->getClientOriginalExtension();
            $destinationPath = public_path() . '/assets/img/portfolio/';
            $fotoPortfolio->move($destinationPath, $filename);
            $portfolio->image = '/assets/img/portfolio/' . $filename;
        }
        if ($request->hasFile('image_2')) {
            $fotoPortfolio = $request->image_2;
            $filename = time() . '_image_portfolio_detail_2.' . $fotoPortfolio->getClientOriginalExtension();
            $destinationPath = public_path() . '/assets/img/portfolio-detail-1/';
            $fotoPortfolio->move($destinationPath, $filename);
            $portfolio->image_2 = '/assets/img/portfolio-detail-1/' . $filename;
        }
        if ($request->hasFile('image_3')) {
            $fotoPortfolio = $request->image_3;
            $filename = time() . '_image_portfolio_detail_3.' . $fotoPortfolio->getClientOriginalExtension();
            $destinationPath = public_path() . '/assets/img/portfolio-detail-2/';
            $fotoPortfolio->move($destinationPath, $filename);
            $portfolio->image_3 = '/assets/img/portfolio-detail-2/' . $filename;
        }
        $portfolio->save();
        return redirect()->route('list.portfolio')->with('success', 'Update Success');
    }

    public function destroyPortfolio($id)
    {
        Portfolio::destroy($id);
        return redirect()->back()->with('success', 'Delete Has Been Success');
    }
    /* ========================== End Portfolio ========================== */

    /* ========================== Client Banner ========================== */
    public function indexClientBanner()
    {
        $clientbanner = ClientBanner::orderBy('updated_at', 'DESC')->paginate(5);
        return view('pages.client-banner.list', compact('clientbanner'));
    }

    public function createClientBanner()
    {
        return view('pages.client-banner.create');
    }

    public function storeClientBanner(Request $request)
    {

        $request->validate([
            'title' => 'required|min:5|max:100',
            'image' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
        ]);

        $client_banner =  new ClientBanner();
        $client_banner->title = $request->title;
        if ($request->hasFile('image')) {
            $foto_client_banner = $request->image;
            $filename = time() . '_image_clients.' . $foto_client_banner->getClientOriginalExtension();
            $destinationPath = public_path() . '/assets/img/clients/';
            $foto_client_banner->move($destinationPath, $filename);
            $client_banner->image = '/assets/img/clients/' . $filename;
        }
        $client_banner->save();
        return redirect()->route('list.client.banner')->with('success', 'You Have Been Added Portfolio.');
    }

    public function editClientBanner($id)
    {
        $clientbanner = ClientBanner::findOrFail($id);
        return view('pages.client-banner.edit', compact('clientbanner'));
    }

    public function updateClientBanner(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5|max:100',
            'image' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
        ]);

        $client_banner = ClientBanner::findOrfail($id);
        $client_banner->title = $request->title;
        if ($request->hasFile('image')) {
            $oldImage = public_path() . $client_banner->image;
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
            $foto_client_banner = $request->image;
            $filename = time() . '_image_clients.' . $foto_client_banner->getClientOriginalExtension();
            $destinationPath = public_path() . '/assets/img/clients/';
            $foto_client_banner->move($destinationPath, $filename);
            $client_banner->image = '/assets/img/clients/' . $filename;
        }
        $client_banner->save();
        return redirect()->route('list.client.banner')->with('success', 'Update Success');
    }

    public function destroyClientBanner($id)
    {
        ClientBanner::destroy($id);
        return redirect()->back()->with('success', 'Delete Has Been Success');
    }
    /* ========================== ENd Client Banner ========================== */

    public function getUserDownloadCatalog()
    {
        $listUser = FormContact::paginate(10);
        return view('pages.user_download_catalog.list', compact('listUser'));
    }
}
