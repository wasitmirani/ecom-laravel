<template>
  <div>
    <div v-if="product">
      <div class="product">
        <a :href="this.$productviewUrl + `${product.slug}/${product.id}`">
          <div class="product-header">
            <span class="badge badge-success" v-if="product.category">{{
              product.category.name
            }}</span>
            <LazyLoadImg
              :imageurl="
                product.product_images[0]
                  ? product.product_images[0].thumbnail
                  : ''
              "
            ></LazyLoadImg>

            <span
              class="veg text-success mdi mdi-circle"
              v-if="product.unitsInStock > 0"
              >In Stock</span
            >

            <span class="veg text-danger mdi mdi-circle" v-else
              >Out of Stock</span
            >
          </div>
          <div class="product-body">
            <h5>{{ product.name | strLimit }}</h5>
            <h6>
              <strong
                ><span class="mdi mdi-approval"></span> Available in</strong
              >
              - {{ product.quantityPerUnit | strLimit }}
            </h6>
          </div>
        </a>
        <div class="product-footer">
          <a :href="this.$productviewUrl + `${product.slug}/${product.id}`">
            <p class="offer-price mb-0">
              Rs. {{ product.unitPrice - product.discount_price }}
              <i class="mdi mdi-tag-outline"></i>
              <span v-if="product.discount_price > 0" class="regular-price"
                >Rs. {{ product.unitPrice }}</span
              >
            </p>
          </a>
          <button
            type="button"
            @click="addtoCart(product.id)"
            class="btn btn-secondary btn-sm"
            v-if="product.unitsInStock > 0"
          >
            <i class="mdi mdi-cart-outline"></i> Add To Cart
          </button>
          <button
            @click="outStock(product.name)"
            type="button"
            class="btn btn-danger btn-sm"
            v-else
          >
            <i class="mdi mdi-lock"> </i> Out of Stock
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import LazyLoadImg from "../LazyLoadComponent";
export default {
  props: ["product"],
  components: {
    LazyLoadImg,
  },
  methods: {
    outStock(product_name) {
      Swal.fire({
        icon: "info",
        title: "Oops...",
        text: `Sorry this product ${product_name} out of stock!`,
        footer: `<a href="${
          this.$base_url + "/contact-us"
        }" class="text-primary">For any further query feel free to contact us</a>`,
      });
    },
    addtoCart(product_id) {
      let frmdata = new FormData();
      frmdata.append("product_id", product_id);
      axios.post(this.$base_url + "/add-to-cart", frmdata).then((res) => {
        const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 1200,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
          },
        });
        Toast.fire({
          icon: "success",
          title: "Add to cart " + res.data.name + " successfuly",
        });
        console.log(res.data);
        $(".cart-value").text(res.data.totalcart);
      });
    },
  },
};
</script>

<style>
</style>
