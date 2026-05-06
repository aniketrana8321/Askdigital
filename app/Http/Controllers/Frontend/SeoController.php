<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeoController extends Controller
{
  public function india()
{
    $pageTitle = 'Best SEO Service in India | Rank Higher with ASK Digital Agency';
    $pageDescription = 'Looking for reliable SEO service in India? ASK Digital Agency offers tailored strategies to boost your search rankings, drive traffic, and grow your business online. Get started today';

    return view('frontend.seo.index', compact('pageTitle', 'pageDescription'));
}

public function mumbai()
{
    $pageTitle = 'Top SEO Service in Mumbai | Boost Your Rankings with ASK Digital Agency';
    $pageDescription = 'Looking for expert SEO service in Mumbai? ASK Digital Agency delivers proven strategies to increase traffic, improve rankings & grow your business online. Contact us today!';

    return view('frontend.seo.mumbai', compact('pageTitle', 'pageDescription'));
}

public function chandigarh()
{
    $pageTitle = 'Top SEO Service in Chandigarh | Drive Traffic & Boost Rankings';
    $pageDescription = 'Get result-driven SEO service in Chandigarh with ASK Digital Agency. Improve your Google rankings, attract more customers, and grow your business online. Book a free consultation today!';

    return view('frontend.seo.chandigarh', compact('pageTitle', 'pageDescription'));
}

public function mohali()
{
    $pageTitle = 'Top SEO Company in Mohali | Proven SEO Strategies That Deliver';
    $pageDescription = 'Partner with the top SEO company in Mohali—ASK Digital Agency. We help businesses rank higher, drive targeted traffic, and boost online visibility with powerful SEO solutions. Contact us now!';

    return view('frontend.seo.mohali', compact('pageTitle', 'pageDescription'));
}

public function delhi()
{
    $pageTitle = 'Best SEO Company in Delhi | Get More Traffic & Higher Rankings';
    $pageDescription = 'Boost your rankings with the best SEO company in Delhi. ASK Digital Agency offers expert SEO services tailored to your business goals. Drive traffic, leads & growth—contact us today!';

    return view('frontend.seo.delhi', compact('pageTitle', 'pageDescription'));
}

    
   public function noida()
{
    $pageTitle = 'Top SEO Services Company in Noida | Dominate Local Rankings';
    $pageDescription = 'Partner with Noida’s leading SEO agency for page-1 rankings in Greater Noida & Delhi-NCR. Free audit, proven strategies, and 90%+ success rate. Start now.';

    return view('frontend.seo.noida', compact('pageTitle', 'pageDescription'));
}



    public function panchkula()
{
    $pageTitle = 'Leading SEO Services Company in Panchkula | Boost Traffic & Sales';
    $pageDescription = 'Hire Panchkula’s top SEO experts at Ask Digital Agency to skyrocket organic traffic, dominate local rankings, and elevate your brand. Free audit + guaranteed results.';

    return view('frontend.seo.panchkula', compact('pageTitle', 'pageDescription'));
}

public function pune()
{
    $pageTitle = 'Top SEO Company in Pune – Organic Growth Experts | Ask Digital Agency';
    $pageDescription = 'Looking for the best SEO services in Pune? Ask Digital Agency delivers data-driven strategies to boost rankings, traffic & conversions. Get a free audit today.';

    return view('frontend.seo.pune', compact('pageTitle', 'pageDescription'));
}

public function bangalore()
{
    $pageTitle = 'SEO Services in Bangalore to Grow Your Business | Ask Digital Agency ';
    $pageDescription = 'Rank #1 in Bangalore with Ask Digital Agency’s expert SEO services. Local SEO, technical audits & content strategies tailored for your growth. Free consultation!';

    return view('frontend.seo.bangalore', compact('pageTitle', 'pageDescription'));
}





public function hyderabad()
{
    $pageTitle = 'Best SEO Services Agency in Hyderabad | Ask Digital Agency ';
    $pageDescription = 'Looking for top SEO services in Hyderabad? Ask Digital offers proven strategies to improve your visibility, traffic, and conversions. Lets grow your business.';

    return view('frontend.seo.hyderabad', compact('pageTitle', 'pageDescription'));
}




}