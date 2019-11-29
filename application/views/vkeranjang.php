<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url() ?>/assets/img/8.JPG" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url() ?>/assets/img/9.JPG" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url() ?>/assets/img/10.JPG" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="jumbotron">
  <h4>CART</h4>
  <div class="container load-in">
    <div class="grid row" style="background-color: #ddd;">
      



        <!-- Keranjang -->
          <div class="">
                <div class="">
                  <div class="">
                      <a class=""><img src="//bestmade-solidus-optimal-assets.s3.amazonaws.com/spree/images/attachments/000/021/735/product/bmc_060519_5pocket_sand_0015.jpg?1565732261" alt="Bmc 060519 5pocket sand 0015" /></a>
                  </div>

                  <div class="">
                    <h4 class="">The Standard Five Pocket Pant</h4>
                      <div class='order-details--text'>
                        Khaki / 29/32
                      </div>

                      <form id="update-cart" class="edit_order" action="/cart" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="patch" /><input type="hidden" name="authenticity_token" value="0zoQPLkWPBhzFmc+thkLxAKdGSut5J+632gC2j75NxdEbs2Y5+k8PjUWtl6U5HJRm4K3AZC8ltZ7BjBdfNw3QA==" />
                        

                            <div class='order-details--quantity'>
                                <div class='line-item__control'>
            <a class="line-item__control--quantity line-item__control--quantity-remove " data-hook="remove-quantity" data-action="modify-qty" data-target="#line_item_qty_line_item_1263157" data-direction="down" href="#">－</a>
            <input class="line-item__input line-item__input--quantity " min="0" value="1" autocomplete="off" pattern="^[0-9]*" data-hook="#line_item_qty_field_line_item_1263157" type="text" name="order[line_items_attributes][0][quantity]" id="order_line_items_attributes_0_quantity" />
            <a class="line-item__control--quantity line-item__control--quantity-add " data-hook="add-quantity" data-action="modify-qty" data-target="#line_item_qty_line_item_1263157" data-direction="up" href="#">＋</a>
          </div>
                <div data-hook='order_item_total'>
            <div class='order-details--product-listing--total'>
              <div class='order-details-product-listing--price order-details--text order-details--text--value order-details--text--total'  data-hook="mini-cart-item-total" data-line-item-id="1263143">
                  $798  
              </div>
            </div>
          </div>

                                <input value="1263157" class="line-item__control--id" type="hidden" name="order[line_items_attributes][0][id]" id="order_line_items_attributes_0_id" />
                                <div class='line-item__control--quantity-stock'  data-hook="line_item_1263157_cant_supply" aria-hidden="true">
                                  No more in stock.
                                </div>
                                <a id="delete_line_item_1263157" class="line-item__control--remove" data-hook="line-item-remove" href="#">Remove</a>
                            </div>

          </form>
                                
              </div>
          </div>
          </div>



        </div>
      </div>
    </div>
   