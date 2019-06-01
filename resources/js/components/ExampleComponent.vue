<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <picture-input
                                ref="pictureInput"
                                @change="onChange"
                                width="600"
                                height="600"
                                margin="16"
                                accept="image/jpeg,image/png"
                                size="10"
                                buttonClass="btn"
                                :customStrings="{
        upload: '<h1>Bummer!</h1>',
        drag: 'Drag a 😺 GIF or GTFO'
      }">
                        </picture-input>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import PictureInput from 'vue-picture-input'
    // export default {
    //     mounted() {
    //         console.log('Component mounted.')
    //     }
    // }
    export default {
        name: 'app',
        data () {
            return {
            }
        },
        components: {
            PictureInput
        },
        methods: {
            onChange (image) {
                console.log('New picture selected!')
                if (image) {
                    console.log('Picture loaded.')
                    this.image = image
                } else {
                    console.log('FileReader API not supported: use the <form>, Luke!')
                }
            }
        }
    }
</script>
