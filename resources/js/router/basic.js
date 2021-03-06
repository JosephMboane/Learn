import PessoaPerdidaComponent from '../components/pessoaPerdida/PessoaPerdidaComponent.vue';
import PessoaPerdidaCreateComponent from '../components/pessoaPerdida/PessoaPerdidaCreateComponent.vue';
import ModalPessoaPerdidaComponent from "../components/pessoaPerdida/ModalPessoaPerdidaComponent";
import ImageComponent from "../components/pessoaPerdida/ImageComponent";
import PessoaPerdidaContributo from "../components/pessoaPerdida/PessoaPerdidaContributo";
import PessoaPerdidaAchadaComponent from "../components/pessoaPerdida/PessoaPerdidaAchadaComponent";
import SideNavComponent from "../components/nav/SideNavComponent";
import ExampleComponent from "../components/ExampleComponent";
export default [
        {

            path: '/',
            component: PessoaPerdidaComponent,
            name: 'pessoaPerdidaComponent'

        },
        {

            path: '/create',
            component: PessoaPerdidaCreateComponent,
            name: 'pessoaPerdidaCreateComponent'

        },
        {

            path: '/modal',
            component: ModalPessoaPerdidaComponent,
            name: 'modalPessoaPerdidaComponent'

        },
        {

        path: '/image',
        component:ImageComponent,
        name:   'imageComponent'
        },
        {
        path: '/contribuir/:id_p_perdida',
        component:PessoaPerdidaContributo,
        name:   'PessoaPerdidaContributo'
        },
        {
        path: '/pessoas-achadas',
        component:PessoaPerdidaAchadaComponent,
        name     :'pessoaPerdidaAchadaComponent'

        },
        {
            path     : '/side-nav-component',
            component:SideNavComponent,
            name     :'sideNavComponent'
        },
        {
            path     :'/teste-arrastar',
            component:ExampleComponent,
            name     :'exampleComponent'
        }

    ]

