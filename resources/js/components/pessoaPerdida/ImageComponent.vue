<link rel="stylesheet" href="croppie.css" />
<script src="croppie.js"></script>

<template>
    <div class="Image-upload-wrapper Image-upload">
        <div class="row">
            <div class="pull-left image">
                <img src="/images/14.jpg" style="width: 100%; height: 250px; filter:blur(1px)" />
            </div>
        </div>

</div>
</template>
<script>

    export default {
        props:['img'],
        mount(){
            this.image = this.img
        },
        data (){
            return {
                image: null,

            }
        }
    }

</script>
<style scoped="">

</style>