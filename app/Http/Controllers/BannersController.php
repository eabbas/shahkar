<?php

namespace App\Http\Controllers;

use App\Models\banners;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    public function create()
    {
        $banners = banners::where('sectionName', 'banners')->get();
        return view('dashboard.banners', ['banners' => $banners]);
    }
    public function upsert(Request $request)
    {
        $banners = banners::where('sectionName', 'banners')->get();
        if (count($banners) == 4) {
            $this->update($request);
            return to_route('home');
        } else {
            $this->store($request);
            return to_route('home');
        }
    }
    public function update(Request $request)
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
    public function store(Request $request)
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
