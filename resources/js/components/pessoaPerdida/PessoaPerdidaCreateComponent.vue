<template>
    <section id="services">
        <div class="container-fluid">
            <div>
                <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);">
                    <div class="text-center d-flex justify-content-center">
                        <a href="#" class="nav-link" style="color: white;"><h4>PROCURA-SE</h4></a>
                    </div>
                    <div class="navbar-menu-wrapper d-flex align-items-center">
                        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                            <li class="nav-item active">
                                <router-link to="/" class="btn btn-default"><i class="pe-7s-home"></i>Pagina Inicial</router-link>
                            </li>
                            <li class="nav-item active">
                                <router-link to="/pessoas-achadas" class="btn btn-default"><i class="pe-7s-home"></i>Pessoas Achadas</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/create" class="btn btn-default"><i class="pe-7s-add-user"></i>Pessoa Perdida</router-link>
                            </li>
                        </ul>


                    </div>
                </nav>
                <br>
                <!--<br>-->

            </div>
            <div class="row">
                <div class="col-md-9" style="position: relative;left: 180px">
                    <div class="form-group">
                        <router-link to="/" class="btn btn-default">Back</router-link>
                    </div>

                    <div class="card">


                        <div class="header">
                            <h4 class="title">Registo de Pessoa Perdida</h4>
                        </div>

                        <div class="content">
                            <form class="pessoa-perdida" >
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input name="nome" type="text" class="form-control"  v-model="pessoaPerdida.nome" placeholder="nome completo">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Sexo</label>
                                        <select class="form-control" name="sexo" v-model="pessoaPerdida.sexo" style="height: 34px">
                                            <option value="M">Masculino</option>
                                            <option value="F">Feminino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Data de Nascimento</label>
                                        <input name="d_nasc" type="date" v-model="pessoaPerdida.data_nasc" class="form-control" placeholder="CNPJ" >
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nacionalidade</label>
                                        <input name="nacionalidade" type="text" class="form-control" placeholder="Nacionalidade" v-model="pessoaPerdida.nacionalidade"  >

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>naturalidade</label>

                                        <input type="text" name="naturalidade" class="form-control" placeholder="naturalidade" v-model="pessoaPerdida.naturalidade"  >

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
<!--                                        <h4><i class="pe-7s-cloud-upload"></i> <label>Foto</label></h4>-->
<!--                                        <input type="file" name="foto"  class="form-control" style="height: 43px">-->
                                        <picture-input name="foto"
                                                ref="pictureInput"
                                                @change="onChange"
                                                width="200"
                                                height="200"
                                                margin="16"
                                                accept="image/jpeg,image/png"
                                                size="10"
                                                buttonClass="btn"
                                                :customStrings="{
        upload: '<h1>Bummer!</h1>',
        drag: 'Clique ou arraste para aqui'
      }" style="margin-left: -130px">
                                        </picture-input>
<!--                                        <input type="file" @change="imageChanged" name="foto"  class="form-control" style="height: 43px">-->
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Informação adicional</label>
                                        <textarea rows="7" name="obs" class="form-control" placeholder="Informação adicional sobre a pessoa perdida"></textarea>
                                    </div>
                                </div>

                                <button type="button" @click="saveForm()" class="btn btn-info btn-fill pull-right" >Gravar</button>

                                <div class="clearfix"></div>
                            </form>
                        </div>
<!--                        <div class="content">-->
<!--                            <form  v-on:submit="saveForm()">-->

<!--                                <div class="col-md-12">-->
<!--                                    <div class="form-group">-->
<!--                                        <h4><i class="pe-7s-cloud-upload"></i> <label>Foto</label></h4>-->
<!--                                        <input type="file" @change="imageChanged"  name="foto"  class="form-control" style="height: 43px">-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                                <button type="submit" class="btn btn-info btn-fill pull-right" >Gravar</button>-->

<!--                                <div class="clearfix"></div>-->
<!--                            </form>-->
<!--                        </div>-->

                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import PictureInput from 'vue-picture-input'

    export default {
        mounted() {
            console.log('Não é possivel.')
        },
        data: function () {
            return {
                pessoaPerdida: {
                    nome: '',
                    sexo: '',
                    data_nasc: '',
                    naturalidade: '',
                    nacionalidade: '',
                    foto: '',
                    upload: null,
                    imagePreview: null,
                }
            }
        },
        components: {
            PictureInput
        },
        methods: {
            imageChanged(e){
                console.log(e.target.files[0]);
              var fileReader = new FileReader()
                fileReader.readAsDataURL(e.target.files[0])
                fileReader.onload = (e)=>{
                  this.pessoaPerdida.foto = e.target.result
                }
                console.log(this.pessoaPerdida)
            },
            onChange (image) {
                console.log('New picture selected!')
                if (image) {
                    console.log('Picture loaded.')
                    this.image = image
                } else {
                    console.log('FileReader API not supported: use the <form>, Luke!')
                }
            },
            saveForm() {
//                console.log('Não é possivel.')
                let form = document.querySelector('.pessoa-perdida');
                let formData = new FormData(form);
                if (this.upload != null)
                    this.formData.append('foto', this.upload)
                var app = this;
                // var tmp = {'nome': app.pessoaPerdida.nome, 'sexo': app.pessoaPerdida.sexo, 'd_nasc': app.pessoaPerdida.data_nasc, 'naturalidade': app.pessoaPerdida.naturalidade, 'nacionalidade': app.pessoaPerdida.nacionalidade, 'foto': app.pessoaPerdida.foto};
                axios.post('/pessoa_perdidas', formData)
                    .then(function (resp) {

                        // window.location.href = '/'
                        // app.$router.push({name: 'pessoaPerdidaComponent' });
                        app.$router.push('/');
                        // app.router.push({ name: 'pessoaPerdidaComponent' })
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Não criou a Pessoa Perdida", resp);
                    });
            }
        },
        beforeMount: function() {
            console.log('Yaaaaa');
        }
    }

</script>