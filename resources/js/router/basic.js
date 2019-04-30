export default new Router({
    routes: [
        {
            path: '/',
            name: 'pessoaPerdidaComponent',
            component: PessoaPerdidaComponent
        },
        {
            path: '/create',
            name: 'pessoaPerdidaCreateComponent',
            component: PessoaPerdidaCreateComponent
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
})
