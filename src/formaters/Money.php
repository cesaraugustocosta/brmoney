<?php
namespace BrMoney\Formaters;

Class Money {
  public function toReais(float $value)
  {
    return 'R$'. number_format($value, 2, ',', '.');
    
  }
}
