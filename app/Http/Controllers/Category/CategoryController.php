<?php

namespace App\Http\Controllers\Category;

use Illuminate\Support\Facades\Event;
use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryRepository;

class CategoryController extends Controller
{

    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * Repository object
     *
     * @var Repositories\Category\CategoryRepository
     */
    protected $categoryRepository;

    /**
     * Create a new controller instance.
     *
     * @param  Repositories\Category\CategoryRepository  $categoryRepository
     * @return void
     */
    
    public function __construct(CategoryRepository $categoryRepository) {

        $this->_config = request('_config');

        $this->categoryRepository = $categoryRepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = $this->categoryRepository->all();
        return view($this->_config['view'])->with('categories', $categories);
    }

    /**
     * Display create form view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view($this->_config['view']);
    }

    /**
     * Store Category.
     *
     * @return \Illuminate\View\View
     */
    public function store()
    {
        $data = collect(request()->input())->except('_token')->toArray();
        $category = $this->categoryRepository->create($data);
        return view($this->_config['view'])->with('categories', $categories);
    }

}