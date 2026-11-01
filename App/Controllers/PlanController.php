<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

/**
 * Class PlanController
 * Zobrazuje stránky súvisiace s tréningovými plánmi.
 *
 * @package App\Controllers
 */
class PlanController extends BaseController
{
    /**
     * Zobrazí detail tréningového plánu (pohľad App/Views/Plan/index.view.php).
     */
    public function index(Request $request): Response
    {
        return $this->html();
    }
}
