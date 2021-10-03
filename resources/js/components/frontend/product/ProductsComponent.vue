<template>
  <div>
    <section class="shop-list section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="shop-filters">
              <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link"
                        data-toggle="collapse"
                        data-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                      >
                        Product Filter
                        <span class="mdi mdi-chevron-down float-right"></span>
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapseOne"
                    class="collapse show"
                    aria-labelledby="headingOne"
                    data-parent="#accordion"
                  >
                    <div class="card-body card-shop-filters">
                      <form class="form-inline mb-3">
                        <div class="form-group">
                          <input
                            type="text"
                            v-model="query"
                            class="form-control"
                            placeholder="Search Products"
                            v-on:keyup="searchProducts"
                          />
                          <button
                            type="submit"
                            class="pl-2 pr-2 btn btn-secondary btn-lg"
                            @click="searchProducts"
                          >
                            <i class="mdi mdi-file-find"></i>
                          </button>
                        </div>
                      </form>
                      <div class="custom-control custom-checkbox">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="cb1"
                          @click="backToProducts"
                        />
                        <label class="custom-control-label" for="cb1"
                          >All Products
                        </label>
                      </div>
                      <hr />
                      <div class="mt-2">
                        <h5 class="b-80"><strong>Categories</strong></h5>
                      </div>

                      <b-form-group>
                        <b-form-checkbox-group
                          v-model="selectedcategories"
                          :options="categories"
                          value-field="id"
                          text-field="name"
                          name="flavour-2a"
                          @change="getProducts()"
                          stacked
                        ></b-form-checkbox-group>
                      </b-form-group>
                    </div>
                  </div>
                </div>
                <!-- <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                      >
                        Price
                        <span class="mdi mdi-chevron-down float-right"></span>
                      </button>
                    </h5>
                  </div>
                  <div
                    id="collapseTwo"
                    class="collapse"
                    aria-labelledby="headingTwo"
                    data-parent="#accordion"
                  >
                    <div class="card-body card-shop-filters">
                     <b-form-checkbox-group id="checkbox-group-23" v-model="selectedPrices" @change="getProducts()" stacked >
                        <b-form-checkbox  value="5-50,">{{this.$currency}}5 To {{this.$currency}}50</b-form-checkbox>
                        <b-form-checkbox value="50-100,">{{this.$currency}}50 To {{this.$currency}}100</b-form-checkbox>
                        <b-form-checkbox value="100-300,">{{this.$currency}}100 To {{this.$currency}}300</b-form-checkbox>
                        <b-form-checkbox value="500-1000,">{{this.$currency}}500 To {{this.$currency}}1000</b-form-checkbox>
                        <b-form-checkbox value="1000-10000,">{{this.$currency}}1000 To {{this.$currency}}10000</b-form-checkbox>
                    </b-form-checkbox-group>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="left-ad mt-4">
              <img
                class="img-fluid"
                :src="this.$base_url + '/frontend/img/ad/1.jpg'"
                alt=""
              />
            </div>
          </div>
          <div class="col-md-9">
            <div
              class="d-inline-block"
              style="font-size: 1.1rem"
              v-if="selectedcategories.length > 0 || selectedPrices.length > 0"
            >
              <b-form-tag
                @remove="removeTags(tag)"
                :title="'clear all'"
                variant="danger"
                class="mr-1"
                >Clear all</b-form-tag
              >
              <hr />
            </div>

            <div class="d-inline-block" style="font-size: 1.1rem">
              <b-form-tag
                v-for="tag in selectedcategories"
                @remove="removeTag(tag)"
                :key="tag"
                :title="tag"
                variant="info"
                class="mr-1"
                >{{ getCategoryName(tag) }}</b-form-tag
              >
            </div>
            <div class="d-inline-block" style="font-size: 1.1rem">
              <b-form-tag
                v-for="tag in selectedPrices"
                @remove="removePricesTag(tag)"
                :key="tag"
                :title="tag"
                variant="info"
                class="mr-1"
                >{{ tag }}</b-form-tag
              >
            </div>

            <!-- <a href="#"
              ><img class="img-fluid mb-3" src="img\shop.jpg" alt=""
            /></a> -->

            <div class="shop-head">
              <a href="#"><span class="mdi mdi-home"></span> Home</a>
              <span class="mdi mdi-chevron-right"></span>
              <a role="button" @click="backToProducts()">Products</a>
              <span
                class="mdi mdi-chevron-right"
                v-if="this.category_id"
              ></span>
              <a href="#">{{ getCategoryName(this.category_id) }}</a>

              <!-- <div class="btn-group float-right mb-2">
                <button
                  type="button"
                  class="btn btn-dark dropdown-toggle"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Sort by Products &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Price (Low to High)</a>
                  <a class="dropdown-item" href="#">Price (High to Low)</a>
                  <a class="dropdown-item" href="#">Discount (High to Low)</a>
                  <a class="dropdown-item" href="#">Name (A to Z)</a>
                </div>
              </div> -->
              <h5 class="mb-3">
                <span v-if="this.category_id">{{
                  getCategoryName(this.category_id)
                }}</span>
              </h5>
            </div>

            <b-overlay :show="loading" spinnerVariant="danger">
              <div class="row">
                <div
                  class="col-md-4 pmb-3"
                  v-for="(product, index) in products.data"
                  :key="index"
                >
                  <ProductCard :product="product"></ProductCard>
                </div>
              </div>
            </b-overlay>

            <nav>
              <ul class="pagination justify-content-center">
                <pagination
                  :data="products"
                  :limit="5"
                  @pagination-change-page="getProducts"
                ></pagination>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import ProductCard from "./ProductCard";
Vue.component("pagination", require("laravel-vue-pagination"));
export default {
  components: {
    ProductCard,
  },
  data() {
    return {
      products: {},
      selectedcategories: [],
      loading: false,
      filtersprices: [],
      current_categoryName: "",
      selectedPrices: [],
      sortBy: "",
      categories: [],
      pageNum: 1,
      category_id: "",
      query: "",
    };
  },
  methods: {
    searchProducts: _.debounce(
      function () {
        this.clearUri();

        this.getProducts();
      },
      500 // 500 milliseconds
    ),
    backToProducts() {
      this.clearUri();
      this.selectedcategories = [];
      this.category_id = "";
      this.clearUri();
      this.getProducts();
    },

    clearUri() {
      var uri = window.location.toString();
      if (uri.indexOf("?") > 0) {
        var clean_uri = uri.substring(0, uri.indexOf("?"));
        window.history.replaceState({}, document.title, clean_uri);
      }
    },
    removeTags() {
      this.selectedcategories = [];
      this.selectedPrices = [];
    },
    removePricesTag(tag) {
      const index = this.selectedPrices.indexOf(tag);
      if (index > -1) {
        this.selectedPrices.splice(index, 1);
        this.getProducts();
      }
      //   if (this.selectedPrices.length < 1) this.clearUri();
    },
    removeTag(tag) {
      const index = this.selectedcategories.indexOf(tag);
      if (index > -1) {
        this.selectedcategories.splice(index, 1);
        this.getProducts();
      }
      if (this.selectedcategories.length < 1) this.clearUri();
    },
    getCategoryName(value) {
      let result = this.categories.find((item) => item.id == value);
      if (result) return result.name;
    },
    getProducts(page = 1) {
      this.pageNum = page;
      this.loading = true;
      window.scrollTo({ top: 0, behavior: "smooth" });
      let formdata = new FormData();

      axios
        .get(
          this.$hostapi_url +
            "/frontend/products?page=" +
            page +
            "&query=" +
            this.query +
            "&categories_list=" +
            this.selectedcategories
        )
        .then((res) => {
          this.products = res.data;
          this.loading = false;
        });
    },
    getUrlParams() {
      let uri = window.location.search.substring(1);
      let params = new URLSearchParams(uri);
      if (
        (params.get("category_id") != "null") &
        (params.get("category_id") != null)
      ) {
        this.category_id = params.get("category_id");
        this.selectedcategories.push(this.category_id);
      }
      if ((params.get("query") != "null") & (params.get("query") != null)) {
        this.query = params.get("query");
      }
    },
  },

  mounted() {
    this.categories = this.$attrs["categories"];
    this.getUrlParams();
    this.getProducts();
  },
};
</script>

<style></style>
