<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SitemapController extends Controller
{
    public function sitemap()
    {
        header('Content-type: text/xml');
        echo '<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        $languages = LaravelLocalization::getSupportedLocales();
        foreach ($languages as $key => $language) {
            echo '
    <sitemap>
        <loc>https://sfccy.com/sitemap-' . $key . '.xml</loc>
        <lastmod>' . date('Y-m-d') . '</lastmod>
    </sitemap>';
        }
        echo '
</sitemapindex>';
    }

    public function sitemapMain($language)
    {
        header('Content-type: text/xml');
        echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xhtml="http://www.w3.org/1999/xhtml">';
        $languages = LaravelLocalization::getSupportedLocales();
        echo '
    <url>
        <loc>https://sfccy.com/' . $language . '</loc>
        <lastmod>' . date('Y-m-d') . '</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>';
        foreach ($languages as $key => $lang) {
            //if ($key != $language) {
            echo '
        <xhtml:link rel="alternate" hreflang="' . $key . '" href="https://sfccy.com/' . (($key != 'en') ? $key : '') . '" />';
            //}
        }
        echo '
        <xhtml:link rel="alternate" hreflang="x-default" href="https://sfccy.com/" />
    </url>';
        echo '
    <url>
        <loc>https://sfccy.com/' . (($language != 'en') ? $language . '/' : '') . 'terms</loc>
        <lastmod>' . date('Y-m-d') . '</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>';
        foreach ($languages as $key => $lang) {
            //if ($key != $language) {
            echo '
        <xhtml:link rel="alternate" hreflang="' . $key . '" href="https://sfccy.com/' . (($key != 'en') ? $key . '/' : '') . 'terms" />';
            //}
        }
        echo '
        <xhtml:link rel="alternate" hreflang="x-default" href="https://sfccy.com/terms" />
    </url>';
        echo '
    <url>
        <loc>https://sfccy.com/' . (($language != 'en') ? $language . '/' : '') . 'privacy</loc>
        <lastmod>' . date('Y-m-d') . '</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>';
        foreach ($languages as $key => $lang) {
            //if ($key != $language) {
            echo '
        <xhtml:link rel="alternate" hreflang="' . $key . '" href="https://sfccy.com/' . (($key != 'en') ? $key . '/' : '') . 'privacy" />';
            //}
        }
        echo '
        <xhtml:link rel="alternate" hreflang="x-default" href="https://sfccy.com/privacy" />
    </url>';
        echo '
    <url>
        <loc>https://sfccy.com/' . (($language != 'en') ? $language . '/' : '') . 'signup</loc>
        <lastmod>' . date('Y-m-d') . '</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>';
        foreach ($languages as $key => $lang) {
            //if ($key != $language) {
            echo '
        <xhtml:link rel="alternate" hreflang="' . $key . '" href="https://sfccy.com/' . (($key != 'en') ? $key . '/' : '') . 'signup" />';
            //}
        }
        echo '
        <xhtml:link rel="alternate" hreflang="x-default" href="https://sfccy.com/signup" />
    </url>';
        echo '
    <url>
        <loc>https://sfccy.com/' . (($language != 'en') ? $language . '/' : '') . 'login</loc>
        <lastmod>' . date('Y-m-d') . '</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>';
        foreach ($languages as $key => $lang) {
            //if ($key != $language) {
            echo '
        <xhtml:link rel="alternate" hreflang="' . $key . '" href="https://sfccy.com/' . (($key != 'en') ? $key . '/' : '') . 'login" />';
            //}
        }
        echo '
        <xhtml:link rel="alternate" hreflang="x-default" href="https://sfccy.com/login" />
    </url>';
        echo '
    <url>
        <loc>https://sfccy.com/' . (($language != 'en') ? $language . '/' : '') . 'forgot</loc>
        <lastmod>' . date('Y-m-d') . '</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>';
        foreach ($languages as $key => $lang) {
            //if ($key != $language) {
            echo '
        <xhtml:link rel="alternate" hreflang="' . $key . '" href="https://sfccy.com/' . (($key != 'en') ? $key . '/' : '') . 'forgot" />';
            //}
        }
        echo '
        <xhtml:link rel="alternate" hreflang="x-default" href="https://sfccy.com/forgot" />
    </url>';
        echo '
    <url>
        <loc>https://sfccy.com/' . (($language != 'en') ? $language . '/' : '') . 'working-afternoons</loc>
        <lastmod>' . date('Y-m-d') . '</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>';
        foreach ($languages as $key => $lang) {
            //if ($key != $language) {
            echo '
        <xhtml:link rel="alternate" hreflang="' . $key . '" href="https://sfccy.com/' . (($key != 'en') ? $key . '/' : '') . 'working-afternoons" />';
            //}
        }
        echo '
        <xhtml:link rel="alternate" hreflang="x-default" href="https://sfccy.com/working-afternoons" />
    </url>';
        echo '
    <url>
        <loc>https://sfccy.com/' . (($language != 'en') ? $language . '/' : '') . 'partnerships</loc>
        <lastmod>' . date('Y-m-d') . '</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>';
        foreach ($languages as $key => $lang) {
            //if ($key != $language) {
            echo '
        <xhtml:link rel="alternate" hreflang="' . $key . '" href="https://sfccy.com/' . (($key != 'en') ? $key . '/' : '') . 'partnerships" />';
            //}
        }
        echo '
        <xhtml:link rel="alternate" hreflang="x-default" href="https://sfccy.com/partnerships" />
    </url>';
        echo '
    <url>
        <loc>https://sfccy.com/' . (($language != 'en') ? $language . '/' : '') . 'about</loc>
        <lastmod>' . date('Y-m-d') . '</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>';
        foreach ($languages as $key => $lang) {
            //if ($key != $language) {
            echo '
        <xhtml:link rel="alternate" hreflang="' . $key . '" href="https://sfccy.com/' . (($key != 'en') ? $key . '/' : '') . 'about" />';
            //}
        }
        echo '
        <xhtml:link rel="alternate" hreflang="x-default" href="https://sfccy.com/about" />
    </url>';
        echo '
    <url>
        <loc>https://sfccy.com/' . (($language != 'en') ? $language . '/' : '') . 'contact</loc>
        <lastmod>' . date('Y-m-d') . '</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>';
        foreach ($languages as $key => $lang) {
            //if ($key != $language) {
            echo '
        <xhtml:link rel="alternate" hreflang="' . $key . '" href="https://sfccy.com/' . (($key != 'en') ? $key . '/' : '') . 'contact" />';
            //}
        }
        echo '
        <xhtml:link rel="alternate" hreflang="x-default" href="https://sfccy.com/contact" />
    </url>';
        echo '
    <url>
        <loc>https://sfccy.com/' . (($language != 'en') ? $language . '/' : '') . 'events</loc>
        <lastmod>' . date('Y-m-d') . '</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>';
        foreach ($languages as $key => $lang) {
            //if ($key != $language) {
            echo '
        <xhtml:link rel="alternate" hreflang="' . $key . '" href="https://sfccy.com/' . (($key != 'en') ? $key . '/' : '') . 'events" />';
            //}
        }
        echo '
        <xhtml:link rel="alternate" hreflang="x-default" href="https://sfccy.com/events" />
    </url>';
        echo '
    <url>
        <loc>https://sfccy.com/' . (($language != 'en') ? $language . '/' : '') . 'startups</loc>
        <lastmod>' . date('Y-m-d') . '</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>';
        foreach ($languages as $key => $lang) {
            //if ($key != $language) {
            echo '
        <xhtml:link rel="alternate" hreflang="' . $key . '" href="https://sfccy.com/' . (($key != 'en') ? $key . '/' : '') . 'startups" />';
            //}
        }
        echo '
        <xhtml:link rel="alternate" hreflang="x-default" href="https://sfccy.com/startups" />
    </url>';
        echo '
    <url>
        <loc>https://sfccy.com/' . (($language != 'en') ? $language . '/' : '') . 'ecosystem</loc>
        <lastmod>' . date('Y-m-d') . '</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>';
        foreach ($languages as $key => $lang) {
            //if ($key != $language) {
            echo '
        <xhtml:link rel="alternate" hreflang="' . $key . '" href="https://sfccy.com/' . (($key != 'en') ? $key . '/' : '') . 'ecosystem" />';
            //}
        }
        echo '
        <xhtml:link rel="alternate" hreflang="x-default" href="https://sfccy.com/ecosystem" />
    </url>';
        echo '
</urlset>';
    }
}
