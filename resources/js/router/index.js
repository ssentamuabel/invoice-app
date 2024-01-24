import {createRouter, createWebHistory} from 'vue-router'


import invoiceIndex from "../components/invoices/index.vue"
import notFound from "../components/notFound.vue"
import newInvoice from "../components/invoices/new.vue"

const routes = [
    {
        path: '/',
        component: invoiceIndex
    },
    {
        path: '/:pathMatch(.*)*',
        component: notFound
    },
    {
        path:'/invoice/new',
        component:newInvoice
    }
] 



const router = createRouter({
    history:createWebHistory(),
    routes
})



export default router;