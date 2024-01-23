import { Config } from 'ziggy-js'

export interface User {
    id: number
    name: string
    email: string
    email_verified_at: string
}

export interface Product {
    id: number
    name: string
    sku: string
    description: string
    price: number
    quantity: number
    image: string
}

export interface Customer {
    id: number
    name: string
    email: string
    phone: string
    address: string
    city: string
    state: string
    zip: string
}

export type PageProps<
    T extends Record<string, unknown> = Record<string, unknown>
> = T & {
    auth: {
        user: User
    }
    ziggy: Config & { location: string }
}
