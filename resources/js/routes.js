import HelloComponent from './components/HelloComponent.vue'

export const routes = [
    // {path: '/admin/test',component: App},
    {path:'/public/admin/test',component: HelloComponent,name:'hellocomponent',meta: { auth: true}},
    
];