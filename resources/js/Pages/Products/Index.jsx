import { Link } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

export default function Index({ products }) {
    
    return (
        <AuthenticatedLayout>
            <div className="bg-white">
                <div className="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <h1 className="flex justify-center items-center text-3xl text-purple-900 font-bold">มาขายของ</h1>
                <br />
                    <ul className="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        {products.map((product) => (
                            <li key={product.id} className="group relative">
                                <Link href={`/products/${product.id}`}>
                                    <img
                                        src={product.image}
                                        className="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80"
                                    />
                                    <div className="mt-4 flex justify-between">
                                        <div>
                                            <h2 className="text-sm text-gray-700">
                                                {product.name}
                                            </h2>
                                        </div>
                                    </div>
                                    <p className="text-sm font-medium text-gray-900">${product.price}</p>
                                </Link>
                                <br />
                            </li>
                        ))}
                    </ul>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
