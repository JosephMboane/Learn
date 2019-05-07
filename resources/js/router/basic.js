import PessoaPerdidaComponent from '../components/pessoaPerdida/PessoaPerdidaComponent.vue';
import PessoaPerdidaCreateComponent from '../components/pessoaPerdida/PessoaPerdidaCreateComponent.vue';
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
        // {
        //     path: '/services',
        //     name: 'services',
        //     component: services
        // },
        // {
        //     path: '/contact',
        //     name: 'contact',
        //     component: contact
        // }
    ]

