<?php
/**
 * @Author           Waqar Hussain
 * @Functionality    Display YouTube Search Results using the Google V3 API Call
 * @Purpose          Code Evaluation by Aphix softwares Ireland.
 * @Date             18-01-2018
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class YSearch extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function ShowSearch()
    {
        // request "index.html.twig" view to output
        return $this->render('ysearch/index.html.twig');
    }
}