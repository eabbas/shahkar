<?php

namespace App\Http\Controllers;

use App\Models\banners;
use App\Models\bigTile;
use App\Models\footerTile;
use App\Models\logo;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    public function bannersCreate()
    {
        $banners = banners::where('sectionName', 'banners')->get();
        $logo = logo::all();
        return view('admin.homeSettings.banners', [
            'banners' => $banners,
            'logo' => $logo
        ]);
    }
    public function bigBannerCreate()
    {
        $bigBanner = banners::where('sectionName', 'bigBanner')->get();
        $logo = logo::all();
        return view('admin.homeSettings.bigBanner', [
            'bigBanner' => $bigBanner,
            'logo' => $logo
        ]);
    }
    public function tilesCreate()
    {
        $tileBanners = banners::where('sectionName', 'tileBanners')->get();
        $logo = logo::all();
        return view('admin.homeSettings.tileBanners', [
            'tileBanners' => $tileBanners,
            'logo' => $logo
        ]);
    }
    public function bigTileCreate()
    {
        $bigTile = bigTile::all();
        $logo = logo::all();
        return view('admin.homeSettings.bigTile', [
            'bigTile' => $bigTile,
            'logo' => $logo
        ]);
    }
    public function footerTileCreate()
    {
        $footerTile = footerTile::all();
        $logo = logo::all();
        return view('admin.homeSettings.footerTile', [
            'footerTile' => $footerTile,
            'logo' => $logo
        ]);
    }
    public function logoCreate()
    {
        $logo = logo::all();
        return view('admin.homeSettings.logo', ['logo' => $logo]);
    }
    public function upsert(Request $request)
    {
        if (array_key_exists('logo', $request->all())) {
            $logo = logo::all();
            if (count($logo) == 1) {
                $this->updateLogo($request);
            } else {
                $this->storeLogo($request);
            }
            return redirect()->back();
        }
        if (array_key_exists('footerTile', $request->all())) {
            $footerTile = footerTile::all();
            if (count($footerTile) == 1) {
                $this->updateFooterTile($request);
                return to_route('home');
            } else {
                $this->storeFooterTile($request);
                return to_route('home');
            }
        }
        if (array_key_exists('bigTile', $request->all())) {
            $bigTile = bigTile::all();
            if (count($bigTile) == 1) {
                $this->updateBigTile($request);
                return to_route('home');
            } else {
                $this->storeBigTile($request);
                return to_route('home');
            }
        }
        if ($request->sectionName == 'tileBanners') {
            $tileBanners = banners::where('sectionName', 'tileBanners')->get();
            if (count($tileBanners) == 2) {
                $this->updateTileBanner($request);
                return to_route('home');
            } else {
                $this->storeTileBanner($request);
                return to_route('home');
            }
        }
        if ($request->sectionName == 'bigBanner') {
            $bigBanner = banners::where('sectionName', 'bigBanner')->get();
            if (count($bigBanner) == 1) {
                $this->updateBigBanner($request);
                return to_route('home');
            } else {
                $this->storeBigBanner($request);
                return to_route('home');
            }
        }
        if ($request->sectionName == 'banners') {
            $banners = banners::where('sectionName', 'banners')->get();
            if (count($banners) == 4) {
                $this->updateBanners($request);
                return to_route('home');
            } else {
                $this->storeBanners($request);
                return to_route('home');
            }
        }
    }
    public function updateLogo(Request $request)
    {
        $logoOriginalName = request()->logo->getClientOriginalName();
        $logoPath = $request->file('logo')->storeAs('images', time() . $logoOriginalName, 'public');
        $logo = logo::find($request->logo_id);
        $logo->link_href = $request->link_href;
        $logo->alt_text = $request->alt_text;
        $logo->logo = "storage/" . $logoPath;
        $logo->save();
    }
    public function storeLogo(Request $request)
    {
        $logoOriginalName = request()->logo->getClientOriginalName();
        $logoPath = $request->file('logo')->storeAs('images', time() . $logoOriginalName, 'public');
        logo::create([
            "link_href" => $request->link_href,
            "alt_text" => $request->alt_text,
            "logo" => "storage/" . $logoPath,
        ]);
    }
    public function updateFooterTile(Request $request)
    {
        $imgOriginalName = request()->img->getClientOriginalName();
        $imgPath = $request->file('img')->storeAs('images', time() . $imgOriginalName, 'public');
        $bg_imgOriginalName = request()->bg_img->getClientOriginalName();
        $bg_imgPath = $request->file('bg_img')->storeAs('images', time() . $bg_imgOriginalName, 'public');
        $footerTile = footerTile::find($request->footerTile);
        $footerTile->title = $request->title;
        $footerTile->text = $request->text;
        $footerTile->img = "storage/" . $imgPath;
        $footerTile->bg_img = "storage/" . $bg_imgPath;
        $footerTile->save();
    }
    public function storeFooterTile(Request $request)
    {
        $imgOriginalName = request()->img->getClientOriginalName();
        $imgPath = $request->file('img')->storeAs('images', time() . $imgOriginalName, 'public');
        $bg_imgOriginalName = request()->bg_img->getClientOriginalName();
        $bg_imgPath = $request->file('bg_img')->storeAs('images', time() . $bg_imgOriginalName, 'public');
        footerTile::create([
            "title" => $request->title,
            "text" => $request->text,
            "img" => "storage/" . $imgPath,
            "bg_img" => "storage/" . $bg_imgPath
        ]);
    }
    public function updateBigTile(Request $request)
    {
        $imgOriginalName = request()->img->getClientOriginalName();
        $imgPath = $request->file('img')->storeAs('images', time() . $imgOriginalName, 'public');
        $bg_imgOriginalName = request()->bg_img->getClientOriginalName();
        $bg_imgPath = $request->file('bg_img')->storeAs('images', time() . $bg_imgOriginalName, 'public');
        $bigTile = bigTile::find($request->bigTile);
        $bigTile->header = $request->header;
        $bigTile->title = $request->title;
        $bigTile->text = $request->text;
        $bigTile->btn1_content = $request->btn1_content;
        $bigTile->btn1_href = $request->btn1_href;
        $bigTile->btn2_content = $request->btn2_content;
        $bigTile->btn2_href = $request->btn2_href;
        $bigTile->img = "storage/" . $imgPath;
        $bigTile->bg_img = "storage/" . $bg_imgPath;
        $bigTile->save();
    }
    public function storeBigTile(Request $request)
    {
        $imgOriginalName = request()->img->getClientOriginalName();
        $imgPath = $request->file('img')->storeAs('images', time() . $imgOriginalName, 'public');
        $bg_imgOriginalName = request()->bg_img->getClientOriginalName();
        $bg_imgPath = $request->file('bg_img')->storeAs('images', time() . $bg_imgOriginalName, 'public');
        bigTile::create([
            "header" => $request->header,
            "title" => $request->title,
            "text" => $request->text,
            "btn1_content" => $request->btn1_content,
            "btn1_href" => $request->btn1_href,
            "btn2_content" => $request->btn2_content,
            "btn2_href" => $request->btn2_href,
            "img" => "storage/" . $imgPath,
            "bg_img" => "storage/" . $bg_imgPath
        ]);
    }
    public function updateTileBanner(Request $request)
    {
        $img1OriginalName = request()->img1->getClientOriginalName();
        $img1Path = $request->file('img1')->storeAs('images', time() . $img1OriginalName, 'public');
        $firstTile = banners::find($request->firstTile);
        $firstTile->sectionName = $request->sectionName;
        $firstTile->image = "storage/" . $img1Path;
        $firstTile->title = $request->title1;
        $firstTile->link_content = $request->linkContent1;
        $firstTile->link_href = $request->linkHref1;
        $firstTile->save();
        $img2OriginalName = request()->img2->getClientOriginalName();
        $img2Path = $request->file('img2')->storeAs('images', time() . $img2OriginalName, 'public');
        $secondTile = banners::find($request->secondTile);
        $secondTile->sectionName = $request->sectionName;
        $secondTile->image = "storage/" . $img2Path;
        $secondTile->title = $request->title2;
        $secondTile->link_content = $request->linkContent2;
        $secondTile->link_href = $request->linkHref2;
        $secondTile->save();
    }
    public function storeTileBanner(Request $request)
    {
        $img1OriginalName = request()->img1->getClientOriginalName();
        $img1Path = $request->file('img1')->storeAs('images', time() . $img1OriginalName, 'public');
        banners::create([
            "sectionName" => $request->sectionName,
            "image" => "storage/" . $img1Path,
            "title" => $request->title1,
            "link_content" => $request->linkContent1,
            "link_href" => $request->linkHref1
        ]);
        $img2OriginalName = request()->img2->getClientOriginalName();
        $img2Path = $request->file('img2')->storeAs('images', time() . $img2OriginalName, 'public');
        banners::create([
            "sectionName" => $request->sectionName,
            "image" => "storage/" . $img2Path,
            "title" => $request->title2,
            "link_content" => $request->linkContent2,
            "link_href" => $request->linkHref2
        ]);
    }
    public function updateBigBanner(Request $request)
    {
        $imgOriginalName = request()->img->getClientOriginalName();
        $imgPath = $request->file('img')->storeAs('images', time() . $imgOriginalName, 'public');
        $bigBanner = banners::find($request->bigBanner);
        $bigBanner->sectionName = $request->sectionName;
        $bigBanner->image = "storage/" . $imgPath;
        $bigBanner->title = $request->title;
        $bigBanner->link_content = $request->linkContent;
        $bigBanner->link_href = $request->linkHref;
        $bigBanner->save();
    }
    public function storeBigBanner(Request $request)
    {
        $imgOriginalName = request()->img->getClientOriginalName();
        $imgPath = $request->file('img')->storeAs('images', time() . $imgOriginalName, 'public');
        banners::create([
            "sectionName" => $request->sectionName,
            "image" => "storage/" . $imgPath,
            "title" => $request->title,
            "link_content" => $request->linkContent,
            "link_href" => $request->linkHref
        ]);
    }
    public function updateBanners(Request $request)
    {
        $img1OriginalName = request()->img1->getClientOriginalName();
        $img1Path = $request->file('img1')->storeAs('images', time() . $img1OriginalName, 'public');
        $firstBanner = banners::find($request->firstBanner);
        $firstBanner->sectionName = $request->sectionName;
        $firstBanner->image = "storage/" . $img1Path;
        $firstBanner->title = $request->title1;
        $firstBanner->link_content = $request->linkContent1;
        $firstBanner->link_href = $request->linkHref1;
        $firstBanner->save();
        $img2OriginalName = request()->img2->getClientOriginalName();
        $img2Path = $request->file('img2')->storeAs('images', time() . $img2OriginalName, 'public');
        $secondBanner = banners::find($request->secondBanner);
        $secondBanner->sectionName = $request->sectionName;
        $secondBanner->image = "storage/" . $img2Path;
        $secondBanner->title = $request->title2;
        $secondBanner->link_content = $request->linkContent2;
        $secondBanner->link_href = $request->linkHref2;
        $secondBanner->save();
        $img3OriginalName = request()->img3->getClientOriginalName();
        $img3Path = $request->file('img3')->storeAs('images', time() . $img3OriginalName, 'public');
        $thirdBanner = banners::find($request->thirdBanner);
        $thirdBanner->sectionName = $request->sectionName;
        $thirdBanner->image = "storage/" . $img3Path;
        $thirdBanner->title = $request->title3;
        $thirdBanner->link_content = $request->linkContent3;
        $thirdBanner->link_href = $request->linkHref3;
        $thirdBanner->save();
        $img4OriginalName = request()->img4->getClientOriginalName();
        $img4Path = $request->file('img4')->storeAs('images', time() . $img4OriginalName, 'public');
        $forthBanner = banners::find($request->forthBanner);
        $forthBanner->sectionName = $request->sectionName;
        $forthBanner->image = "storage/" . $img4Path;
        $forthBanner->title = $request->title4;
        $forthBanner->link_content = $request->linkContent4;
        $forthBanner->link_href = $request->linkHref4;
        $forthBanner->save();
    }
    public function storeBanners(Request $request)
    {
        $img1OriginalName = request()->img1->getClientOriginalName();
        $img1Path = $request->file('img1')->storeAs('images', time() . $img1OriginalName, 'public');
        banners::create([
            "sectionName" => $request->sectionName,
            "image" => "storage/" . $img1Path,
            "title" => $request->title1,
            "link_content" => $request->linkContent1,
            "link_href" => $request->linkHref1
        ]);
        $img2OriginalName = request()->img2->getClientOriginalName();
        $img2Path = $request->file('img2')->storeAs('images', time() . $img2OriginalName, 'public');
        banners::create([
            "sectionName" => $request->sectionName,
            "image" => "storage/" . $img2Path,
            "title" => $request->title2,
            "link_content" => $request->linkContent2,
            "link_href" => $request->linkHref2
        ]);
        $img3OriginalName = request()->img3->getClientOriginalName();
        $img3Path = $request->file('img3')->storeAs('images', time() . $img3OriginalName, 'public');
        banners::create([
            "sectionName" => $request->sectionName,
            "image" => "storage/" . $img3Path,
            "title" => $request->title3,
            "link_content" => $request->linkContent3,
            "link_href" => $request->linkHref3
        ]);
        $img4OriginalName = request()->img4->getClientOriginalName();
        $img4Path = $request->file('img4')->storeAs('images', time() . $img4OriginalName, 'public');
        banners::create([
            "sectionName" => $request->sectionName,
            "image" => "storage/" . $img4Path,
            "title" => $request->title4,
            "link_content" => $request->linkContent4,
            "link_href" => $request->linkHref4
        ]);
    }
}
