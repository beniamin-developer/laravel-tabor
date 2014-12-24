<?php namespace LaravelTabor\Facades\Src;

use LaravelTabor\Facades\CartInterface;
use LaravelTabor\Repositories\CartRepositoryInterface;

class Cart implements CartInterface
{
    /**
     * @var \App\Models\Cart
     */
    private $cartRepository;

    public function __construct(CartRepositoryInterface $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function all()
    {
        return $this->cartRepository->all();
    }

    public function get($id)
    {
        return $this->cartRepository->find($id);
    }

    public function total()
    {
        return $this->cartRepository->total();
    }

    public function count($quantity = false)
    {
        return $this->cartRepository->count($quantity);
    }

    public function add()
    {
        return "add";
    }
} 