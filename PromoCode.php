<?php

interface PromoCode
{
    /**
     * Установить промо-код
     *
     * @param string $code
     *
     * @return bool
     */
    public function setCode(string $code): bool;

    /**
     * Убрать промо-код
     *
     * @return mixed
     */
    public function deleteCode();

    /**
     * Установить товары по промокоду
     *
     * @param Product $product
     *
     * @return bool
     */
    public function setProductsByPromoCode(Product $product): bool;

    /**
     * Дата и время истечения промо-кода
     *
     * @param DateTime $dateTime
     *
     * @return bool
     */
    public function setExpireTime(DateTime $dateTime): bool;

    /**
     * Применить промо-код
     *
     * @param string $code
     *
     * @return bool
     */
    public function applyPromotionalCode(string $code): bool;
}