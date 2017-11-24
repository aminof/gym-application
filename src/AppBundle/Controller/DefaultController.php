<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Route("/home", name="home2")
     */
    public function homeAction()
    {
        return $this->render('AppBundle:frontSite:index.html.twig');
    }
    
    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('AppBundle:frontSite:about.html.twig');
    }
    
    /**
     * @Route("/trainers", name="trainers")
     */
    public function trainersAction()
    {
        return $this->render('AppBundle:frontSite:trainers.html.twig');
    }
    
    /**
     * @Route("/classes", name="classes")
     */
    public function classesAction()
    {
        return $this->render('AppBundle:frontSite:classes.html.twig');
    }
    
    /**
     * @Route("/blog", name="blog")
     */
    public function blogAction()
    {
        return $this->render('AppBundle:frontSite:blog.html.twig');
    }
    
    /**
     * @Route("/pricing", name="pricing")
     */
    public function pricingAction()
    {
        return $this->render('AppBundle:frontSite:pricing.html.twig');
    }
    
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render('AppBundle:frontSite:contact.html.twig');
    }
    
    /**
     * @Route("/blogSingle", name="blogSingle")
     */
    public function blogSingleAction()
    {
        return $this->render('AppBundle:frontSite:blog_single.html.twig');
    }
    
    /**
     * @Route("/singleClass", name="singleClass")
     */
    public function singleClassAction()
    {
        return $this->render('AppBundle:frontSite:single_class.html.twig');
    }
    
    /**
     * @Route("/room", name="room")
     */
    public function roomAction()
    {
        return $this->render('AppBundle:frontSite:room.html.twig');
    }
}
