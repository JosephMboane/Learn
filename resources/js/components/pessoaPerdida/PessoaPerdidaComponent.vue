<template>

    <!--<div id="content" style="height: 100%">-->
        <section id="services">
         <div>
             <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);">
             <div class="text-center d-flex justify-content-center">
                 <a href="#" class="nav-link" style="color: white;"><h4>PROCURA-SE</h4></a>
             </div>
             <div class="navbar-menu-wrapper d-flex align-items-center">
                 <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                     <!--<small style="color: red">-->
                         <!--<p style="color: red"><a style="color:inherit;" href="/login"><b>Autentique-se</b></a> para visualizar o perfil dos Explicadores. Ou clique <a style="color:inherit;" href="/register"><b>aqui</b></a> para criar a sua conta </p>-->
                     <!--</small>-->

                     <li class="nav-item active">
                         <router-link to="/" class="btn btn-default"><i class="pe-7s-home"></i>Pagina Inicial</router-link>
                     </li>
                     <li class="nav-item">
                         <router-link to="{name: 'createPessoaPerdida'}" class="btn btn-default"><i class="pe-7s-add-user"></i>Pessoa Perdida</router-link>
                     </li>
                     <li>
                         <a><form>
                             <div class="col-md-auto" >
                                 <div class="form-group">
                                     <!--<label>Pesquisar</label>-->
                                     <input type="text" id="entrada"  name="pesquisar" class="form-control"  placeholder="pesquisar pelo nome" style="text-align: center">
                                     <!--{{--<button type="submit" class="btn btn-fill">pesquisar</button>--}}-->

                                 </div>

                             </div>
                         </form>
                         </a>
                     </li>
                 </ul>


             </div>
         </nav>

             <!--<div v-for="pessoa_perdida, index in pessoa_perdidas">-->
             <!--<p>{{ pessoa_perdida.id_p_perdida }}</p>-->
             <!--&lt;!&ndash;<p>{{ pessoa_perdida.nome }}</p>&ndash;&gt;-->
             <!--&lt;!&ndash;<p>{{ pessoa_perdida.sexo }}</p>&ndash;&gt;-->
             <!--&lt;!&ndash;<p>{{ pessoa_perdida.nacionalidade }}</p>&ndash;&gt;-->
             <!--&lt;!&ndash;<p>{{ pessoa_perdida.naturalidade }}</p>&ndash;&gt;-->

             <!--</div>-->
         </div>

            <div class="container">


                <!--<div v-for="pessoa_perdida, index in pessoa_perdidas">-->
                    <!--<p>{{ pessoa_perdida.id_p_perdida }}</p>-->
                    <!--<p>{{ pessoa_perdida.nome }}</p>-->
                    <!--<p>{{ pessoa_perdida.sexo }}</p>-->
                    <!--<p>{{ pessoa_perdida.nacionalidade }}</p>-->
                    <!--<p>{{ pessoa_perdida.naturalidade }}</p>-->

                <!--</div>-->

                <div class="row">
                    <div class="col-lg-4" v-for="pessoa_perdida, index in pessoa_perdidas">

                        <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                            <img class="img-thumbnail" src="" alt="Generic placeholder image" width="100" height="100" style="margin-left: -40px; margin-top: -40px">
                            <!--{{&#45;&#45;<img id="imagem_historia" class="img-thumbnail" src="/imgs_historias/" alt="Generic placeholder image" width="100" height="100" style="margin-left: -40px; margin-top: -40px">&#45;&#45;}}-->
                            <h4 class="title" style="margin-top: -0px; padding-bottom: 25px" id="titulo">{{ pessoa_perdida.nome }}</h4>
                            <p class="description" style="margin-left: -35px" id="testo_historia">{{ pessoa_perdida.sexo }}</p>
                            <p>
                                <a class="btn btn-default" href="" role="button">Ver Mais</a>
                            </p>
                        </div>
                    </div>


                </div>

            </div>
        </section>

    <!--</div>-->
</template>

<script>
    export default {
        data: function () {
            return {
                pessoa_perdidas:[]
            }
        },
        mounted() {
            var app = this;
            axios.get('/pessoa_perdidas')
                .then(function (resp) {
                    app.pessoa_perdidas = resp.data.data;
                    console.log(resp.data.data)
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Upsi não foi possivel carregar os dados!");
                });
        }
//        methods: {
//            deleteEntry(id, index) {
//                if (confirm("Do you really want to delete it?")) {
//                    var app = this;
//                    var app = this;
//                    axios.delete('/api/v1/companies/' + id)
//                        .then(function (resp) {
//                            app.companies.splice(index, 1);
//                        })
//                        .catch(function (resp) {
//                            alert("Could not delete company");
//                        });
//                }
//            }
//        }
    }
</script>

