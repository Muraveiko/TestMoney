<?php

require_once('api/Simpla.php');

/**
 * Class TestMoney
 * @property Orders $orders
 */
class TestMoney extends Simpla
{	
	public function checkout_form($order_id, $button_text = null)
	{
		if(empty($button_text))
			$button_text = 'Перейти к оплате';
		$order = $this->orders->get_order((int)$order_id);
		$this->orders->update_order((int)$order_id,array('paid'=>1));
		
		
		return 'Заказ оплачен<meta http-equiv="refresh" content="1;/order/'.$order->url.'">';
	}

}