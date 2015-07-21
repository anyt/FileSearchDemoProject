<?php

namespace Anyt\FileSearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function searchAction(Request $request)
    {
        $keyword = $request->query->get('keyword', '');
        $files = array();
        $error = '';

        if ($keyword) {
            /** @var \Anyt\FileSearchBundle\FileSearch $fileSearch */
            $fileSearch = $this->get('file_search');
            try {
                $files = $fileSearch->find($keyword);
            } catch (\Exception $exception) {
                $error = $exception->getMessage();
            }
        }

        return $this->render('AnytFileSearchBundle:Default:search.html.twig',
            array(
                'files' => $files,
                'keyword' => $keyword,
                'error' => $error
            )
        );
    }
}
