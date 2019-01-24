<?php

interface Product
{
    /**
     * Добавить товар
     *
     *
     * @param Product $product
     *
     * @return bool
     */
    public function add(Product $product): bool;

    /**
     * Удалить товар
     *
     * @param Product $product
     *
     * @return bool
     */
    public function delete(Product $product): bool;

    /**
     * Устанвить кол-во товара
     *
     * @param Product $product
     * @param int     $amount
     *
     * @return bool
     */
    public function setAmountProduct(Product $product, int $amount): bool;
}