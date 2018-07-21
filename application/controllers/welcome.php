<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        include("ip.php");
        $ip = $_SERVER['REMOTE_ADDR'];
        $ipdetails = new ipdetails($ip);
        $ipdetails->scan();
        $this->lang->load('home', 'pt-br');

        $data['lang'] = $this->lang->line('lang');
        $data['description'] = $this->lang->line('description');
        $data['keyword'] = $this->lang->line('keyword');
        $data['linkLanguage'] = $this->lang->line('linkLanguage');
        $data['title'] = $this->lang->line('title');
        $data['name'] = $this->lang->line('name');
        $data["services"] = $this->lang->line('services');
        $data["portfolio"] = $this->lang->line('portfolio');
        $data["about"] = $this->lang->line('about');
        $data["social"] = $this->lang->line('social');
        $data["contact"] = $this->lang->line('contact');
        $data["thanks"] = $this->lang->line('thanks');
        $data["welcome"] = $this->lang->line('welcome');
        $data["takealook"] = $this->lang->line('takealook');
        $data["servicesDescription"] = $this->lang->line('servicesDescription');
        $data["servicesEcommerce"] = $this->lang->line('servicesEcommerce');
        $data["servicesEcommerceDescription"] = $this->lang->line('servicesEcommerceDescription');
        $data["servicesResponsive"] = $this->lang->line('servicesResponsive');
        $data["servicesResponsiveDescription"] = $this->lang->line('servicesResponsiveDescription');
        $data["salesGrowing"] = $this->lang->line('salesGrowing');
        $data["salesGrowingDescription"] = $this->lang->line('salesGrowingDescription');
        $data["portfolioDescription"] = $this->lang->line('portfolioDescription');
        $data["aboutDescription"] = $this->lang->line('aboutDescription');
        $data["socialDescription"] = $this->lang->line('socialDescription');
        $data["descriptionCarlos"] = $this->lang->line('descriptionCarlos');
        $data["socialDescription"] = $this->lang->line('socialDescription');
        $data["contactDescription"] = $this->lang->line('contactDescription');
        $data["yourName"] = $this->lang->line('yourName');
        $data["yourEmail"] = $this->lang->line('yourEmail');
        $data["yourPhone"] = $this->lang->line('yourPhone');
        $data["yourMessage"] = $this->lang->line('yourMessage');
        $data["yourNameDescription"] = $this->lang->line('yourNameDescription');
        $data["yourEmailDescription"] = $this->lang->line('yourEmailDescription');
        $data["yourPhoneDescription"] = $this->lang->line('yourPhoneDescription');
        $data["yourMessageDescription"] = $this->lang->line('yourMessageDescription');
        $data["sendMessage"] = $this->lang->line('sendMessage');
        $data["privacy"] = $this->lang->line('privacy');
        $data["terms"] = $this->lang->line('terms');
        $data["thisIs"] = $this->lang->line('thisIs');
        $data["justThe"] = $this->lang->line('justThe');
        $data["beginning"] = $this->lang->line('beginning');



        $data["year1988"] = $this->lang->line('year1988');
        $data["year1988Title"] = $this->lang->line('year1988Title');
        $data["year1988Description"] = $this->lang->line('year1988Description');
        $data["year2004"] = $this->lang->line('year2004');
        $data["year2004Title"] = $this->lang->line('year2004Title');
        $data["year2004Description"] = $this->lang->line('year2004Description');
        $data["year2006"] = $this->lang->line('year2006');
        $data["year2006Title"] = $this->lang->line('year2006Title');
        $data["year2006Description"] = $this->lang->line('year2006Description');
        $data["year2007"] = $this->lang->line('year2007');
        $data["year2007Title"] = $this->lang->line('year2007Title');
        $data["year2007Description"] = $this->lang->line('year2007Description');
        $data["year2008"] = $this->lang->line('year2008');
        $data["year2008Title"] = $this->lang->line('year2008Title');
        $data["year2008Description"] = $this->lang->line('year2008Description');
        $data["year2009"] = $this->lang->line('year2009');
        $data["year2009Title"] = $this->lang->line('year2009Title');
        $data["year2009Description"] = $this->lang->line('year2009Description');
        $data["year2010"] = $this->lang->line('year2010');
        $data["year2010Title"] = $this->lang->line('year2010Title');
        $data["year2010Description"] = $this->lang->line('year2010Description');
        $data["year2011"] = $this->lang->line('year2011');
        $data["year2011Title"] = $this->lang->line('year2011Title');
        $data["year2011Description"] = $this->lang->line('year2011Description');
        $data["year2012"] = $this->lang->line('year2012');
        $data["year2012Title"] = $this->lang->line('year2012Title');
        $data["year2012Description"] = $this->lang->line('year2012Description');
        $data["year2013"] = $this->lang->line('year2013');
        $data["year2013Title"] = $this->lang->line('year2013Title');
        $data["year2013Description"] = $this->lang->line('year2013Description');
        $data["year2014"] = $this->lang->line('year2014');
        $data["year2014Title"] = $this->lang->line('year2014Title');
        $data["year2014Description"] = $this->lang->line('year2014Description');
        $data["year2015"] = $this->lang->line('year2015');
        $data["year2015Title"] = $this->lang->line('year2015Title');
        $data["year2015Description"] = $this->lang->line('year2015Description');



        $this->load->view('welcome_message', $data);
    }

    public function en() {
        include("ip.php");
        $ip = $_SERVER['REMOTE_ADDR'];
        $ipdetails = new ipdetails($ip);
        $ipdetails->scan();
        $this->lang->load('home', 'english');

        $data['lang'] = $this->lang->line('lang');
        $data['description'] = $this->lang->line('description');
        $data['keyword'] = $this->lang->line('keyword');
        $data['linkLanguage'] = $this->lang->line('linkLanguage');
        $data['title'] = $this->lang->line('title');
        $data['name'] = $this->lang->line('name');
        $data["services"] = $this->lang->line('services');
        $data["portfolio"] = $this->lang->line('portfolio');
        $data["about"] = $this->lang->line('about');
        $data["social"] = $this->lang->line('social');
        $data["contact"] = $this->lang->line('contact');
        $data["thanks"] = $this->lang->line('thanks');
        $data["welcome"] = $this->lang->line('welcome');
        $data["takealook"] = $this->lang->line('takealook');
        $data["servicesDescription"] = $this->lang->line('servicesDescription');
        $data["servicesEcommerce"] = $this->lang->line('servicesEcommerce');
        $data["servicesEcommerceDescription"] = $this->lang->line('servicesEcommerceDescription');
        $data["servicesResponsive"] = $this->lang->line('servicesResponsive');
        $data["servicesResponsiveDescription"] = $this->lang->line('servicesResponsiveDescription');
        $data["salesGrowing"] = $this->lang->line('salesGrowing');
        $data["salesGrowingDescription"] = $this->lang->line('salesGrowingDescription');
        $data["portfolioDescription"] = $this->lang->line('portfolioDescription');
        $data["aboutDescription"] = $this->lang->line('aboutDescription');
        $data["socialDescription"] = $this->lang->line('socialDescription');
        $data["descriptionCarlos"] = $this->lang->line('descriptionCarlos');
        $data["socialDescription"] = $this->lang->line('socialDescription');
        $data["contactDescription"] = $this->lang->line('contactDescription');
        $data["yourName"] = $this->lang->line('yourName');
        $data["yourEmail"] = $this->lang->line('yourEmail');
        $data["yourPhone"] = $this->lang->line('yourPhone');
        $data["yourMessage"] = $this->lang->line('yourMessage');
        $data["yourNameDescription"] = $this->lang->line('yourNameDescription');
        $data["yourEmailDescription"] = $this->lang->line('yourEmailDescription');
        $data["yourPhoneDescription"] = $this->lang->line('yourPhoneDescription');
        $data["yourMessageDescription"] = $this->lang->line('yourMessageDescription');
        $data["sendMessage"] = $this->lang->line('sendMessage');
        $data["privacy"] = $this->lang->line('privacy');
        $data["terms"] = $this->lang->line('terms');
        $data["thisIs"] = $this->lang->line('thisIs');
        $data["justThe"] = $this->lang->line('justThe');
        $data["beginning"] = $this->lang->line('beginning');


        $data["year1988"] = $this->lang->line('year1988');
        $data["year1988Title"] = $this->lang->line('year1988Title');
        $data["year1988Description"] = $this->lang->line('year1988Description');
        $data["year2004"] = $this->lang->line('year2004');
        $data["year2004Title"] = $this->lang->line('year2004Title');
        $data["year2004Description"] = $this->lang->line('year2004Description');
        $data["year2006"] = $this->lang->line('year2006');
        $data["year2006Title"] = $this->lang->line('year2006Title');
        $data["year2006Description"] = $this->lang->line('year2006Description');
        $data["year2007"] = $this->lang->line('year2007');
        $data["year2007Title"] = $this->lang->line('year2007Title');
        $data["year2007Description"] = $this->lang->line('year2007Description');
        $data["year2008"] = $this->lang->line('year2008');
        $data["year2008Title"] = $this->lang->line('year2008Title');
        $data["year2008Description"] = $this->lang->line('year2008Description');
        $data["year2009"] = $this->lang->line('year2009');
        $data["year2009Title"] = $this->lang->line('year2009Title');
        $data["year2009Description"] = $this->lang->line('year2009Description');
        $data["year2010"] = $this->lang->line('year2010');
        $data["year2010Title"] = $this->lang->line('year2010Title');
        $data["year2010Description"] = $this->lang->line('year2010Description');
        $data["year2011"] = $this->lang->line('year2011');
        $data["year2011Title"] = $this->lang->line('year2011Title');
        $data["year2011Description"] = $this->lang->line('year2011Description');
        $data["year2012"] = $this->lang->line('year2012');
        $data["year2012Title"] = $this->lang->line('year2012Title');
        $data["year2012Description"] = $this->lang->line('year2012Description');
        $data["year2013"] = $this->lang->line('year2013');
        $data["year2013Title"] = $this->lang->line('year2013Title');
        $data["year2013Description"] = $this->lang->line('year2013Description');
        $data["year2014"] = $this->lang->line('year2014');
        $data["year2014Title"] = $this->lang->line('year2014Title');
        $data["year2014Description"] = $this->lang->line('year2014Description');
        $data["year2015"] = $this->lang->line('year2015');
        $data["year2015Title"] = $this->lang->line('year2015Title');
        $data["year2015Description"] = $this->lang->line('year2015Description');


        $this->load->view('welcome_message', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */