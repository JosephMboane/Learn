<template>
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);">
        <div class="text-center d-flex justify-content-center">
            <a href="#" class="nav-link" style="color: white;"><h4>PROCURA-SE</h4></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                <li class="nav-item active">
                    <router-link to="/pessoa_perdidas" class="btn btn-default"><i class="pe-7s-home"></i>Pagina Inicial</router-link>
                </li>
                <li class="nav-item">
                    <router-link :to="{name: 'createPessoaPerdida'}" class="btn btn-default"><i class="pe-7s-add-user"></i>Pessoa Perdida</router-link>
                </li>
                <li>
                    <a><form>
                        <div class="col-md-auto" >
                            <div class="form-group">
                                <!--<label>Pesquisar</label>-->
                                <input type="text" id="entrada"  name="pesquisar" class="form-control"  placeholder="pesquisar pelo nome" style="text-align: center">
                                <!--{{&#45;&#45;<button type="submit" class="btn btn-fill">pesquisar</button>&#45;&#45;}}-->

                            </div>

                        </div>
                    </form>
                    </a>
                </li>
            </ul>


        </div>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
