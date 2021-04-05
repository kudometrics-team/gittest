<?php
    error_reporting(0);
    $act=$_REQUEST['act'];
    
    if($act='fblivestream')
    {
        $package=$_REQUEST['option1'];
        $country=$_REQUEST['option2'];
        
        if($country=="30 Minutes")
        {
            if($package=="100 Facebook Live Stream Views"){echo '$6.00';}
            if($package=="250 Facebook Live Stream Views"){echo '$15.00';}
            if($package=="500 Facebook Live Stream Views"){echo '$29.00';}
            if($package=="1000 Facebook Live Stream Views"){echo '$55.00';}
        }
        elseif($country=="60 Minutes")
        {
            if($package=="100 Facebook Live Stream Views"){echo '$12.00';}
            if($package=="250 Facebook Live Stream Views"){echo '$30.00';}
            if($package=="500 Facebook Live Stream Views"){echo '$59.00';}
            if($package=="1000 Facebook Live Stream Views"){echo '$115.00';}
        }
        elseif($country=="90 Minutes")
        {
            if($package=="100 Facebook Live Stream Views"){echo '$20.00';}
            if($package=="250 Facebook Live Stream Views"){echo '$50.00';}
            if($package=="500 Facebook Live Stream Views"){echo '$99.00';}
            if($package=="1000 Facebook Live Stream Views"){echo '$195.00';}
        }
        elseif($country=="120 Minutes")
        {
            if($package=="100 Facebook Live Stream Views"){echo '$25.00';}
            if($package=="250 Facebook Live Stream Views"){echo '$60.00';}
            if($package=="500 Facebook Live Stream Views"){echo '$120.00';}
            if($package=="1000 Facebook Live Stream Views"){echo '$240.00';}
        }
    }
    
    if($act='ytviews')
    {
        $package=$_REQUEST['option1'];
        $country=$_REQUEST['option2'];
        
		if($country=='Worldwide'){
			if($package=="1000 YouTube Views (2-3 days)"){echo '$10.00';}
			if($package=="5000 YouTube Views (4-6 days)"){echo '$49.00';}
			if($package=="10000 YouTube Views (7-9 days)"){echo '$88.00';}
		}
		
		if($country=="United States" || $country=="United Kingdom" || $country=="Canada" || $country=="Austria" || $country=="Belgium" || $country=="Brazil" || $country=="Denmark" || $country=="France" || $country=="Germany" || $country=="Greece" || $country=="India" || $country=="Israel" || $country=="Italy" || $country=="Japan" || $country=="Netherlands" || $country=="Portugal" || $country=="Russia" || $country=="Saudi Arabia" || $country=="South Korea"|| $country=="Australia" || $country=="Hungary" || $country=="Ireland" || $country=="Mexico" || $country=="Spain" || $country=="Sweden" || $country=="Taiwan" || $country=="Turkey" || $country=="Ukraine" || $country=="Vietnam" || $country=="Argentina" || $country=="Indonesia" || $country=="Malaysia" || $country=="Pakistan" || $country=="Thailand")
        {
            if($package=="1000 YouTube Views (2-3 days)"){echo '$12.00';}
        }
		
        //if($country=="USA" || $country=="India" || $country=="Brazil" || $country=="Saudi Arabia" || $country=="Australia" || $country=="Turkey" || $country=="Germany" || $country=="Pakistan" || $country=="UK" || $country=="France" || $country=="Taiwan" || $country=="Eygpt" || $country=="Russia" || $country=="Canada" || $country=="Hong Kong" || $country=="Israel" || $country=="Italy" || $country=="Poland" || $country=="Sweden" || $country=="Japan")
        //{
            //if($package=="1000 YouTube Views (2-3 days)"){echo '$8.00';}
            //if($package=="5000 YouTube Views (4-6 days)"){echo '$40.00';}
            //if($package=="10000 YouTube Views (7-9 days)"){echo '$75.00';}
            //if($package=="25000 YouTube Views (5-8 days)"){echo '$180.00';}
            //if($package=="50000 YouTube Views (8-11 days)"){echo '$335.00';}
            //if($package=="100000 YouTube Views (11-13 days)"){echo '$649.00';}
            //if($package=="250000 YouTube Views (13-16 days)"){echo '$1599.00';}
            //if($package=="500000 YouTube Views (16-20 days)"){echo '$3099.00';}
            //if($package=="1000000 YouTube Views (20-25 days)"){echo '$5899.00';}
        //}
    }
    
    if($act='ytviewworldwide')
    {
        $package=$_REQUEST['option1'];
        $type=$_REQUEST['option2'];
        
        if($type=='Normal')
        {
            if($package=="1000 YouTube Views (2-3 days)"){echo '$10.00';}
            if($package=="5000 YouTube Views (4-6 days)"){echo '$30.00';}
            if($package=="10000 YouTube Views (7-9 days)"){echo '$55.00';}
            if($package=="25000 YouTube Views (5-8 days)"){echo '$130.00';}
            if($package=="50000 YouTube Views (8-11 days)"){echo '$255.00';}
            if($package=="100000 YouTube Views (11-13 days)"){echo '$499.00';}
            if($package=="250000 YouTube Views (13-16 days)"){echo '$1199.00';}
            if($package=="500000 YouTube Views (16-20 days)"){echo '$2299.00';}
            if($package=="1000000 YouTube Views (20-25 days)"){echo '$4499.00';}
        }
        else if($type=='High Retention')
        {
            if($package=="1000 YouTube Views (2-3 days)"){echo '$9.00';}
            if($package=="5000 YouTube Views (4-6 days)"){echo '$35.00';}
            if($package=="10000 YouTube Views (7-9 days)"){echo '$65.00';}
            if($package=="25000 YouTube Views (5-8 days)"){echo '$155.00';}
            if($package=="50000 YouTube Views (8-11 days)"){echo '$295.00';}
            if($package=="100000 YouTube Views (11-13 days)"){echo '$575.00';}
            if($package=="250000 YouTube Views (13-16 days)"){echo '$1399.00';}
            if($package=="500000 YouTube Views (16-20 days)"){echo '$2699.00';}
            if($package=="1000000 YouTube Views (20-25 days)"){echo '$5199.00';}
        }
        else if($type=='Monetizable')
        {
            if($package=="1000 YouTube Views (2-3 days)"){echo '$7.00';}
            if($package=="5000 YouTube Views (4-6 days)"){echo '$35.00';}
            if($package=="10000 YouTube Views (7-9 days)"){echo '$65.00';}
            if($package=="25000 YouTube Views (5-8 days)"){echo '$155.00';}
            if($package=="50000 YouTube Views (8-11 days)"){echo '$295.00';}
            if($package=="100000 YouTube Views (11-13 days)"){echo '$575.00';}
            if($package=="250000 YouTube Views (13-16 days)"){echo '$1399.00';}
            if($package=="500000 YouTube Views (16-20 days)"){echo '$2699.00';}
            if($package=="1000000 YouTube Views (20-25 days)"){echo '$5199.00';}
        }
        else if($type=='Engagement')
        {
            if($package=="1000 YouTube Views (2-3 days)"){echo '$17.00';}
            if($package=="5000 YouTube Views (4-6 days)"){echo '$79.00';}
            if($package=="10000 YouTube Views (7-9 days)"){echo '$155.00';}
            if($package=="25000 YouTube Views (5-8 days)"){echo '$379.00';}
            if($package=="50000 YouTube Views (8-11 days)"){echo '$749.00';}
            if($package=="100000 YouTube Views (11-13 days)"){echo '$1449.00';}
        }
        else if($type=='Live Stream')
        {
            if($package=="5000 YouTube Views (4-6 days)"){echo '$50.00';}
        }
        else if($type=='Fast YouTube Views')
        {
            if($package=="1000 YouTube Views (2-3 days)"){echo '$11.00';}
            if($package=="5000 YouTube Views (4-6 days)"){echo '$49.00';}
            if($package=="10000 YouTube Views (7-9 days)"){echo '$88.00';}
        }
    }
    
    if($act='tweetautolik')
    {
        $package=$_REQUEST['option1'];
        $country=$_REQUEST['option2'];
        
        if($country=="25 Posts")
        {
            if($package=="25 Twitter Likes (1-3 days)"){echo '$3.00'.' <small>/Month</small>';}
            if($package=="50 Twitter Likes (1-3 days)"){echo '$5.00'.' <small>/Month</small>';}
            if($package=="100 Twitter Likes (2-4 days)"){echo '$9.00'.' <small>/Month</small>';}
            if($package=="250 Twitter Likes (2-5 days)"){echo '$20.00'.' <small>/Month</small>';}
            if($package=="500 Twitter Likes (5-8 days)"){echo '$39.00'.' <small>/Month</small>';}
            if($package=="1000 Twitter Likes (10-12 days)"){echo '$77.00'.' <small>/Month</small>';}
            if($package=="2500 Twitter Likes (15-17 days)"){echo '$179.00'.' <small>/Month</small>';}
            if($package=="5000 Twitter Likes (20-25 days)"){echo '$349.00'.' <small>/Month</small>';}
            if($package=="10000 Twitter Likes (25-32 days)"){echo '$679.00'.' <small>/Month</small>';}
        }
        
        if($country=="50 Posts")
        {
            if($package=="25 Twitter Likes (1-3 days)"){echo '$5.00'.' <small>/Month</small>';}
            if($package=="50 Twitter Likes (1-3 days)"){echo '$9.00'.' <small>/Month</small>';}
            if($package=="100 Twitter Likes (2-4 days)"){echo '$17.00'.' <small>/Month</small>';}
            if($package=="250 Twitter Likes (2-5 days)"){echo '$39.00'.' <small>/Month</small>';}
            if($package=="500 Twitter Likes (5-8 days)"){echo '$77.00'.' <small>/Month</small>';}
            if($package=="1000 Twitter Likes (10-12 days)"){echo '$149.00'.' <small>/Month</small>';}
            if($package=="2500 Twitter Likes (15-17 days)"){echo '$359.00'.' <small>/Month</small>';}
            if($package=="5000 Twitter Likes (20-25 days)"){echo '$699.00'.' <small>/Month</small>';}
            if($package=="10000 Twitter Likes (25-32 days)"){echo '$1349.00'.' <small>/Month</small>';}
        }
        
        if($country=="100 Posts")
        {
            if($package=="25 Twitter Likes (1-3 days)"){echo '$9.00'.' <small>/Month</small>';}
            if($package=="50 Twitter Likes (1-3 days)"){echo '$17.00'.' <small>/Month</small>';}
            if($package=="100 Twitter Likes (2-4 days)"){echo '$29.00'.' <small>/Month</small>';}
            if($package=="250 Twitter Likes (2-5 days)"){echo '$69.00'.' <small>/Month</small>';}
            if($package=="500 Twitter Likes (5-8 days)"){echo '$129.00'.' <small>/Month</small>';}
            if($package=="1000 Twitter Likes (10-12 days)"){echo '$249.00'.' <small>/Month</small>';}
            if($package=="2500 Twitter Likes (15-17 days)"){echo '$549.00'.' <small>/Month</small>';}
            if($package=="5000 Twitter Likes (20-25 days)"){echo '$999.00'.' <small>/Month</small>';}
            if($package=="10000 Twitter Likes (25-32 days)"){echo '$1899.00'.' <small>/Month</small>';}
        }
    }
    
    //instagram start
        //if($act='instaviews')
    //{
    //    $package=$_REQUEST['option1'];
    //    $country=$_REQUEST['option2'];
    //    
    //    if($country=="Iran")
    //    {
    //        if($package=="100 Instagram Followers (1-3 days)"){echo '$3.00';}
    //        if($package=="250 Instagram Followers (1-3 days)"){echo '$7.00';}
    //        if($package=="500 Instagram Followers (2-4 days)"){echo '$12.00';}
    //        if($package=="1000 Instagram Followers (2-5 days)"){echo '$20.00';}
    //        if($package=="5000 Instagram Followers (5-8 days)"){echo '$89.00';}
    //        if($package=="10000 Instagram Followers (10-12 days)"){echo '$165.00';}
    //        if($package=="25000 Instagram Followers (15-17 days)"){echo '$389.00';}
    //    }
    //    else if($country=="Russia")
    //    {
    //        if($package=="100 Instagram Followers (1-3 days)"){echo '$3.00';}
    //        if($package=="250 Instagram Followers (1-3 days)"){echo '$7.00';}
    //        if($package=="500 Instagram Followers (2-4 days)"){echo '$12.00';}
    //        if($package=="1000 Instagram Followers (2-5 days)"){echo '$20.00';}
    //        if($package=="5000 Instagram Followers (5-8 days)"){echo '$89.00';}
    //        if($package=="10000 Instagram Followers (10-12 days)"){echo '$165.00';}
    //    }
    //    else if($country=="India" || $country=="Brazil")
    //    {
    //        if($package=="100 Instagram Followers (1-3 days)"){echo '$5.00';}
    //        if($package=="250 Instagram Followers (1-3 days)"){echo '$12.00';}
    //        if($package=="500 Instagram Followers (2-4 days)"){echo '$20.00';}
    //        if($package=="1000 Instagram Followers (2-5 days)"){echo '$35.00';}
    //        if($package=="5000 Instagram Followers (5-8 days)"){echo '$165.00';}
    //        if($package=="10000 Instagram Followers (10-12 days)"){echo '$319.00';}
    //    }
    //    else if($country=="Arab" || $country=="Indonesia" || $country=="Persia")
    //    {
    //        if($package=="100 Instagram Followers (1-3 days)"){echo '$5.00';}
    //        if($package=="250 Instagram Followers (1-3 days)"){echo '$12.00';}
    //        if($package=="500 Instagram Followers (2-4 days)"){echo '$20.00';}
    //        if($package=="1000 Instagram Followers (2-5 days)"){echo '$35.00';}
    //        if($package=="5000 Instagram Followers (5-8 days)"){echo '$165.00';}
    //    }
    //    else if($country=="Asia")
    //    {
    //        if($package=="100 Instagram Followers (1-3 days)"){echo '$5.00';}
    //        if($package=="250 Instagram Followers (1-3 days)"){echo '$12.00';}
    //        if($package=="500 Instagram Followers (2-4 days)"){echo '$20.00';}
    //        if($package=="1000 Instagram Followers (2-5 days)"){echo '$35.00';}
    //    }
    //    
    //    else if($country=='Worldwide')
    //    {
    //        if($package=="100 Instagram Followers (1-3 days)"){echo '$3.00';}
    //        if($package=="250 Instagram Followers (1-3 days)"){echo '$7.00';}
    //        if($package=="500 Instagram Followers (2-4 days)"){echo '$12.00';}
    //        if($package=="1000 Instagram Followers (2-5 days)"){echo '$20.00';}
    //        if($package=="5000 Instagram Followers (5-8 days)"){echo '$89.00';}
    //        if($package=="10000 Instagram Followers (10-12 days)"){echo '$165.00';}
    //        if($package=="25000 Instagram Followers (15-17 days)"){echo '$389.00';}
    //        if($package=="50000 Instagram Followers (20-25 days)"){echo '$749.00';}
    //        if($package=="100000 Instagram Followers (30-35 days)"){echo '$1399.00';}
    //        if($package=="500000 Instagram Followers (60-75 days)"){echo '$6499.00';}
    //    }
    //}
    
    if($act='instaviews')
    {
        $package=$_REQUEST['option1'];
        $country=$_REQUEST['option2'];
        
        if($country=="Worldwide")
        {
			if($package=="100 Instagram Followers (1-3 days)"){echo '$3.00';}
			if($package=="250 Instagram Followers (1-3 days)"){echo '$7.00';}
			if($package=="500 Instagram Followers (2-4 days)"){echo '$12.00';}
			if($package=="1000 Instagram Followers (2-5 days)"){echo '$20.00';}
			if($package=="5000 Instagram Followers (5-8 days)"){echo '$89.00';}
			if($package=="10000 Instagram Followers (10-12 days)"){echo '$165.00';}
			if($package=="25000 Instagram Followers (15-17 days)"){echo '$389.00';}
			if($package=="50000 Instagram Followers (20-25 days)"){echo '$749.00';}
			if($package=="100000 Instagram Followers (30-35 days)"){echo '$1399.00';}
			if($package=="500000 Instagram Followers (60-75 days)"){echo '$6499.00';}
        }
		else if($country=="Arab" || $country=="Brazil" || $country=="China" || $country=="Iran" || $country=="Russia" || $country=="USA")
		{
            if($package=="100 Instagram Followers (1-3 days)"){echo '$5.00';}
            if($package=="250 Instagram Followers (1-3 days)"){echo '$12.00';}
            if($package=="500 Instagram Followers (2-4 days)"){echo '$20.00';}
            if($package=="1000 Instagram Followers (2-5 days)"){echo '$35.00';}
            if($package=="5000 Instagram Followers (5-8 days)"){echo '$165.00';}
		}
    }
	
    if($act='instaworldwide')
    {
        $package=$_REQUEST['option1'];
        $type=$_REQUEST['option2'];
        
    }
    
    if($act='instaautocmnt')
    {
        $package=$_REQUEST['option1'];
        $country=$_REQUEST['option2'];
        
        if($country=="25 Posts")
        {
            if($package=="10 Instagram Auto Comments (1-3 days)"){echo '$2.00'.' <small>/Month</small>';}
            if($package=="25 Instagram Auto Comments (1-3 days)"){echo '$3.00'.' <small>/Month</small>';}
            if($package=="50 Instagram Auto Comments (2-4 days)"){echo '$5.00'.' <small>/Month</small>';}
            if($package=="100 Instagram Auto Comments (2-5 days)"){echo '$9.00'.' <small>/Month</small>';}
            if($package=="250 Instagram Auto Comments (5-8 days)"){echo '$20.00'.' <small>/Month</small>';}
            if($package=="500 Instagram Auto Comments (10-12 days)"){echo '$39.00'.' <small>/Month</small>';}
            if($package=="1000 Instagram Auto Comments (15-17 days)"){echo '$77.00'.' <small>/Month</small>';}
        }
        
        if($country=="50 Posts")
        {
            if($package=="10 Instagram Auto Comments (1-3 days)"){echo '$3.00'.' <small>/Month</small>';}
            if($package=="25 Instagram Auto Comments (1-3 days)"){echo '$5.00'.' <small>/Month</small>';}
            if($package=="50 Instagram Auto Comments (2-4 days)"){echo '$9.00'.' <small>/Month</small>';}
            if($package=="100 Instagram Auto Comments (2-5 days)"){echo '$17.00'.' <small>/Month</small>';}
            if($package=="250 Instagram Auto Comments (5-8 days)"){echo '$39.00'.' <small>/Month</small>';}
            if($package=="500 Instagram Auto Comments (10-12 days)"){echo '$77.00'.' <small>/Month</small>';}
            if($package=="1000 Instagram Auto Comments (15-17 days)"){echo '$149.00'.' <small>/Month</small>';}
        }
        
        if($country=="100 Posts")
        {
            if($package=="10 Instagram Auto Comments (1-3 days)"){echo '$5.00'.' <small>/Month</small>';}
            if($package=="25 Instagram Auto Comments (1-3 days)"){echo '$9.00'.' <small>/Month</small>';}
            if($package=="50 Instagram Auto Comments (2-4 days)"){echo '$17.00'.' <small>/Month</small>';}
            if($package=="100 Instagram Auto Comments (2-5 days)"){echo '$29.00'.' <small>/Month</small>';}
            if($package=="250 Instagram Auto Comments (5-8 days)"){echo '$69.00'.' <small>/Month</small>';}
            if($package=="500 Instagram Auto Comments (10-12 days)"){echo '$129.00'.' <small>/Month</small>';}
            if($package=="1000 Instagram Auto Comments (15-17 days)"){echo '$249.00'.' <small>/Month</small>';}
        }
    }
    
    if($act='instaautoimpress')
    {
        $package=$_REQUEST['option1'];
        $country=$_REQUEST['option2'];
        
        if($country=="25 Posts")
        {
            if($package=="50 Instagram Auto Impressions(1-3 days)"){echo '$5.00'.' <small>/Month</small>';}
            if($package=="100 Instagram Auto Impressions(1-3 days)"){echo '$9.00'.' <small>/Month</small>';}
            if($package=="250 Instagram Auto Impressions(2-4 days)"){echo '$20.00'.' <small>/Month</small>';}
            if($package=="500 Instagram Auto Impressions(2-5 days)"){echo '$39.00'.' <small>/Month</small>';}
            if($package=="1000 Instagram Auto Impressions(5-8 days)"){echo '$77.00'.' <small>/Month</small>';}
            if($package=="2500 Instagram Auto Impressions(10-12 days)"){echo '$179.00'.' <small>/Month</small>';}
            if($package=="5000 Instagram Auto Impressions(15-17 days)"){echo '$349.00'.' <small>/Month</small>';}
            if($package=="10000 Instagram Auto Impressions(20-25 days)"){echo '$679.00'.' <small>/Month</small>';}
        }
        
        if($country=="50 Posts")
        {
            if($package=="50 Instagram Auto Impressions(1-3 days)"){echo '$9.00'.' <small>/Month</small>';}
            if($package=="100 Instagram Auto Impressions(1-3 days)"){echo '$17.00'.' <small>/Month</small>';}
            if($package=="250 Instagram Auto Impressions(2-4 days)"){echo '$39.00'.' <small>/Month</small>';}
            if($package=="500 Instagram Auto Impressions(2-5 days)"){echo '$77.00'.' <small>/Month</small>';}
            if($package=="1000 Instagram Auto Impressions(5-8 days)"){echo '$149.00'.' <small>/Month</small>';}
            if($package=="2500 Instagram Auto Impressions(10-12 days)"){echo '$359.00'.' <small>/Month</small>';}
            if($package=="5000 Instagram Auto Impressions(15-17 days)"){echo '$699.00'.' <small>/Month</small>';}
            if($package=="10000 Instagram Auto Impressions(20-25 days)"){echo '$1349.00'.' <small>/Month</small>';}
        }
        
        if($country=="100 Posts")
        {
            if($package=="50 Instagram Auto Impressions(1-3 days)"){echo '$17.00'.' <small>/Month</small>';}
            if($package=="100 Instagram Auto Impressions(1-3 days)"){echo '$29.00'.' <small>/Month</small>';}
            if($package=="250 Instagram Auto Impressions(2-4 days)"){echo '$69.00'.' <small>/Month</small>';}
            if($package=="500 Instagram Auto Impressions(2-5 days)"){echo '$129.00'.' <small>/Month</small>';}
            if($package=="1000 Instagram Auto Impressions(5-8 days)"){echo '$249.00'.' <small>/Month</small>';}
            if($package=="2500 Instagram Auto Impressions(10-12 days)"){echo '$549.00'.' <small>/Month</small>';}
            if($package=="5000 Instagram Auto Impressions(15-17 days)"){echo '$999.00'.' <small>/Month</small>';}
            if($package=="10000 Instagram Auto Impressions(20-25 days)"){echo '$1899.00'.' <small>/Month</small>';}
        }
    }
    
    if($act='instaautoliks')
    {
        $package=$_REQUEST['option1'];
        $country=$_REQUEST['option2'];
        
        if($country=="25 Posts")
        {
            if($package=="50 Instagram Auto Likes (1-3 days)"){echo '$5.00'.' <small>/Month</small>';}
            if($package=="100 Instagram Auto Likes (1-3 days)"){echo '$9.00'.' <small>/Month</small>';}
            if($package=="250 Instagram Auto Likes (2-4 days)"){echo '$20.00'.' <small>/Month</small>';}
            if($package=="500 Instagram Auto Likes (2-5 days)"){echo '$39.00'.' <small>/Month</small>';}
            if($package=="1000 Instagram Auto Likes (5-8 days)"){echo '$77.00'.' <small>/Month</small>';}
            if($package=="2500 Instagram Auto Likes (10-12 days)"){echo '$179.00'.' <small>/Month</small>';}
            if($package=="5000 Instagram Auto Likes (15-17 days)"){echo '$349.00'.' <small>/Month</small>';}
            if($package=="10000 Instagram Auto Likes (20-25 days)"){echo '$679.00'.' <small>/Month</small>';}
        }
        
        if($country=="50 Posts")
        {
            if($package=="50 Instagram Auto Likes (1-3 days)"){echo '$9.00'.' <small>/Month</small>';}
            if($package=="100 Instagram Auto Likes (1-3 days)"){echo '$17.00'.' <small>/Month</small>';}
            if($package=="250 Instagram Auto Likes (2-4 days)"){echo '$39.00'.' <small>/Month</small>';}
            if($package=="500 Instagram Auto Likes (2-5 days)"){echo '$77.00'.' <small>/Month</small>';}
            if($package=="1000 Instagram Auto Likes (5-8 days)"){echo '$149.00'.' <small>/Month</small>';}
            if($package=="2500 Instagram Auto Likes (10-12 days)"){echo '$359.00'.' <small>/Month</small>';}
            if($package=="5000 Instagram Auto Likes (15-17 days)"){echo '$699.00'.' <small>/Month</small>';}
            if($package=="10000 Instagram Auto Likes (20-25 days)"){echo '$1349.00'.' <small>/Month</small>';}
        }
        
        if($country=="100 Posts")
        {
            if($package=="50 Instagram Auto Likes (1-3 days)"){echo '$17.00'.' <small>/Month</small>';}
            if($package=="100 Instagram Auto Likes (1-3 days)"){echo '$29.00'.' <small>/Month</small>';}
            if($package=="250 Instagram Auto Likes (2-4 days)"){echo '$69.00'.' <small>/Month</small>';}
            if($package=="500 Instagram Auto Likes (2-5 days)"){echo '$129.00'.' <small>/Month</small>';}
            if($package=="1000 Instagram Auto Likes (5-8 days)"){echo '$249.00'.' <small>/Month</small>';}
            if($package=="2500 Instagram Auto Likes (10-12 days)"){echo '$549.00'.' <small>/Month</small>';}
            if($package=="5000 Instagram Auto Likes (15-17 days)"){echo '$999.00'.' <small>/Month</small>';}
            if($package=="10000 Instagram Auto Likes (20-25 days)"){echo '$1899.00'.' <small>/Month</small>';}
        }
    }
    
    if($act='instaautoviews')
    {
        $package=$_REQUEST['option1'];
        $country=$_REQUEST['option2'];
        
        if($country=="25 Posts")
        {
            if($package=="100 Instagram Auto Views (1-3 days)"){echo '$2.00'.' <small>/Month</small>';}
            if($package=="250 Instagram Auto Views (1-3 days)"){echo '$5.00'.' <small>/Month</small>';}
            if($package=="500 Instagram Auto Views (2-4 days)"){echo '$9.00'.' <small>/Month</small>';}
            if($package=="1000 Instagram Auto Views (2-5 days)"){echo '$17.00'.' <small>/Month</small>';}
            if($package=="2500 Instagram Auto Views (5-8 days)"){echo '$37.00'.' <small>/Month</small>';}
            if($package=="5000 Instagram Auto Views (10-12 days)"){echo '$35.00'.' <small>/Month</small>';}
            if($package=="10000 Instagram Auto Views (15-17 days)"){echo '$129.00'.' <small>/Month</small>';}
            if($package=="25000 Instagram Auto Views (20-25 days)"){echo '$249.00'.' <small>/Month</small>';}
            if($package=="50000 Instagram Auto Views (20-25 days)"){echo '$479.00'.' <small>/Month</small>';}
            if($package=="100000 Instagram Auto Views (20-25 days)"){echo '$899.00'.' <small>/Month</small>';}
        }
        
        if($country=="50 Posts")
        {
            if($package=="100 Instagram Auto Views (1-3 days)"){echo '$3.00'.' <small>/Month</small>';}
            if($package=="250 Instagram Auto Views (1-3 days)"){echo '$7.00'.' <small>/Month</small>';}
            if($package=="500 Instagram Auto Views (2-4 days)"){echo '$12.00'.' <small>/Month</small>';}
            if($package=="1000 Instagram Auto Views (2-5 days)"){echo '$20.00'.' <small>/Month</small>';}
            if($package=="2500 Instagram Auto Views (5-8 days)"){echo '$47.00'.' <small>/Month</small>';}
            if($package=="5000 Instagram Auto Views (10-12 days)"){echo '$89.00'.' <small>/Month</small>';}
            if($package=="10000 Instagram Auto Views (15-17 days)"){echo '$165.00'.' <small>/Month</small>';}
            if($package=="25000 Instagram Auto Views (20-25 days)"){echo '$399.00'.' <small>/Month</small>';}
            if($package=="50000 Instagram Auto Views (20-25 days)"){echo '$779.00'.' <small>/Month</small>';}
            if($package=="100000 Instagram Auto Views (20-25 days)"){echo '$1499.00'.' <small>/Month</small>';}
        }
        
        if($country=="100 Posts")
        {
            if($package=="100 Instagram Auto Views (1-3 days)"){echo '$6.00'.' <small>/Month</small>';}
            if($package=="250 Instagram Auto Views (1-3 days)"){echo '$15.00'.' <small>/Month</small>';}
            if($package=="500 Instagram Auto Views (2-4 days)"){echo '$25.00'.' <small>/Month</small>';}
            if($package=="1000 Instagram Auto Views (2-5 days)"){echo '$40.00'.' <small>/Month</small>';}
            if($package=="2500 Instagram Auto Views (5-8 days)"){echo '$95.00'.' <small>/Month</small>';}
            if($package=="5000 Instagram Auto Views (10-12 days)"){echo '$177.00'.' <small>/Month</small>';}
            if($package=="10000 Instagram Auto Views (15-17 days)"){echo '$349.00'.' <small>/Month</small>';}
            if($package=="25000 Instagram Auto Views (20-25 days)"){echo '$799.00'.' <small>/Month</small>';}
            if($package=="50000 Instagram Auto Views (20-25 days)"){echo '$1499.00'.' <small>/Month</small>';}
            if($package=="100000 Instagram Auto Views (20-25 days)"){echo '$2799.00'.' <small>/Month</small>';}
        }
    }
    
    if($act='gplusone')
    {
        $package=$_REQUEST['option1'];
        $country=$_REQUEST['option2'];
        
        if($country=="Google Plus Post")
        {
            if($package=="50 Google Plus Ones (1-2 days)"){echo '$3.00';}
            if($package=="100 Google Plus Ones (1-3 days)"){echo '$5.00';}
            if($package=="250 Google Plus Ones (2-3 days)"){echo '$11.00';}
            if($package=="500 Google Plus Ones (3-4 days)"){echo '$20.00';}
            if($package=="1000 Google Plus Ones (4-5 days)"){echo '$39.00';}
        }
        else if($country=="Website")
        {
            if($package=="50 Google Plus Ones (1-2 days)"){echo '$5.00';}
            if($package=="100 Google Plus Ones (1-3 days)"){echo '$7.00';}
            if($package=="250 Google Plus Ones (2-3 days)"){echo '$15.00';}
            if($package=="500 Google Plus Ones (3-4 days)"){echo '$29.00';}
            if($package=="1000 Google Plus Ones (4-5 days)"){echo '$55.00';}
            if($package=="2500 Google Plus Ones (5-7 days)"){echo '$125.00';}
            if($package=="5000 Google Plus Ones (7-10 days)"){echo '$235.00';}
        }
    }
    
    if($act='telpostview')
    {
        $package=$_REQUEST['option1'];
        $country=$_REQUEST['option2'];
        
        if($country=="5 Posts")
        {
            if($package=="100 Telegram Post Views (1-2 Days)"){echo '$4.00';}
            if($package=="250 Telegram Post Views (1-3 Days)"){echo '$8.00';}
            if($package=="500 Telegram Post Views (2-4 Days)"){echo '$15.00';}
            if($package=="1000 Telegram Post Views (2-4 Days)"){echo '$29.00';}
            if($package=="5000 Telegram Post Views (3-5 Days)"){echo '$135.00';}
            if($package=="10000 Telegram Post Views (5-8 Days)"){echo '$265.00';}
        }
        
        if($country=="10 Posts")
        {
            if($package=="100 Telegram Post Views (1-2 Days)"){echo '$5.00';}
            if($package=="250 Telegram Post Views (1-3 Days)"){echo '$12.00';}
            if($package=="500 Telegram Post Views (2-4 Days)"){echo '$20.00';}
            if($package=="1000 Telegram Post Views (2-4 Days)"){echo '$37.00';}
            if($package=="5000 Telegram Post Views (3-5 Days)"){echo '$165.00';}
            if($package=="10000 Telegram Post Views (5-8 Days)"){echo '$319.00';}
        }
        
        if($country=="20 Posts")
        {
            if($package=="100 Telegram Post Views (1-2 Days)"){echo '$8.00';}
            if($package=="250 Telegram Post Views (1-3 Days)"){echo '$17.00';}
            if($package=="500 Telegram Post Views (2-4 Days)"){echo '$29.00';}
            if($package=="1000 Telegram Post Views (2-4 Days)"){echo '$55.00';}
            if($package=="5000 Telegram Post Views (3-5 Days)"){echo '$265.00';}
            if($package=="10000 Telegram Post Views (5-8 Days)"){echo '$499.00';}
        }
    }
    
    if($act='tweetautoretweet')
    {
        $package=$_REQUEST['option1'];
        $country=$_REQUEST['option2'];
        
        if($country=="25 Posts")
        {
            if($package=="25 Twitter Auto Retweets (1-3 days)"){echo '$3.00'.' <small>/Month</small>';}
            if($package=="50 Twitter Auto Retweets (1-3 days)"){echo '$5.00'.' <small>/Month</small>';}
            if($package=="100 Twitter Auto Retweets (2-4 days)"){echo '$9.00'.' <small>/Month</small>';}
            if($package=="250 Twitter Auto Retweets (2-5 days)"){echo '$20.00'.' <small>/Month</small>';}
            if($package=="500 Twitter Auto Retweets (5-8 days)"){echo '$39.00'.' <small>/Month</small>';}
            if($package=="1000 Twitter Auto Retweets (10-12 days)"){echo '$77.00'.' <small>/Month</small>';}
            if($package=="2500 Twitter Auto Retweets (15-17 days)"){echo '$179.00'.' <small>/Month</small>';}
            if($package=="5000 Twitter Auto Retweets (20-25 days)"){echo '$349.00'.' <small>/Month</small>';}
            if($package=="10000 Twitter Auto Retweets (25-32 days)"){echo '$679.00'.' <small>/Month</small>';}
        }
        
        if($country=="50 Posts")
        {
            if($package=="25 Twitter Auto Retweets (1-3 days)"){echo '$5.00'.' <small>/Month</small>';}
            if($package=="50 Twitter Auto Retweets (1-3 days)"){echo '$9.00'.' <small>/Month</small>';}
            if($package=="100 Twitter Auto Retweets (2-4 days)"){echo '$17.00'.' <small>/Month</small>';}
            if($package=="250 Twitter Auto Retweets (2-5 days)"){echo '$39.00'.' <small>/Month</small>';}
            if($package=="500 Twitter Auto Retweets (5-8 days)"){echo '$77.00'.' <small>/Month</small>';}
            if($package=="1000 Twitter Auto Retweets (10-12 days)"){echo '$149.00'.' <small>/Month</small>';}
            if($package=="2500 Twitter Auto Retweets (15-17 days)"){echo '$359.00'.' <small>/Month</small>';}
            if($package=="5000 Twitter Auto Retweets (20-25 days)"){echo '$699.00'.' <small>/Month</small>';}
            if($package=="10000 Twitter Auto Retweets (25-32 days)"){echo '$1349.00'.' <small>/Month</small>';}
        }
        
        if($country=="100 Posts")
        {
            if($package=="25 Twitter Auto Retweets (1-3 days)"){echo '$9.00'.' <small>/Month</small>';}
            if($package=="50 Twitter Auto Retweets (1-3 days)"){echo '$17.00'.' <small>/Month</small>';}
            if($package=="100 Twitter Auto Retweets (2-4 days)"){echo '$29.00'.' <small>/Month</small>';}
            if($package=="250 Twitter Auto Retweets (2-5 days)"){echo '$69.00'.' <small>/Month</small>';}
            if($package=="500 Twitter Auto Retweets (5-8 days)"){echo '$129.00'.' <small>/Month</small>';}
            if($package=="1000 Twitter Auto Retweets (10-12 days)"){echo '$249.00'.' <small>/Month</small>';}
            if($package=="2500 Twitter Auto Retweets (15-17 days)"){echo '$549.00'.' <small>/Month</small>';}
            if($package=="5000 Twitter Auto Retweets (20-25 days)"){echo '$999.00'.' <small>/Month</small>';}
            if($package=="10000 Twitter Auto Retweets (25-32 days)"){echo '$1899.00'.' <small>/Month</small>';}
        }
    }
?>