<?php namespace LaravelTabor\Repositories\Eloquent;

use App\Models\Cart;
use LaravelTabor\Repositories\CartRepositoryInterface;

class CartRepository implements CartRepositoryInterface {
    /**
     * @var \Cart
     */
    protected $model;

    public function __construct(Cart $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function total()
    {
        $total = 0;
        foreach($this->model->all() as $cart) {
            $total += ($cart->price * $cart->count);
        }

        return $this->model->format($total);
    }

    public function count($quantity)
    {
        $total = 0;
        foreach($this->model->all() as $cart) {
            $total += ($cart->count);
        }

        if($quantity === true) {
            $totalQuantity = $total;
        } else {
            $totalQuantity = count($this->model->all());
        }

        return $totalQuantity;
    }

    public function create($data)
    {
        //return $this->model->create($data);
    }

    public function update($id, $data)
    {

    }

    public function destroy($id)
    {
        $this->model->where('id', $id)->delete();
    }
}