<template>
   <div v-lazy-container="{ selector: 'img', error:this.$errorImageUrl, loading: this.$LoadingImageUrl }">
                <img  class="img-fluid"  :data-src="imageurl">
     </div>
</template>

<script>
export default {
    props:["imageurl"],

}
</script>

<style>

</style>
