import { Link } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

export default function Show({ product }) {
    return (
        <AuthenticatedLayout>
            <br />
            <div className="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg">
                
                <h1 className="text-2xl font-bold text-gray-800 mb-4 flex justify-center ">
                    {product.name}
                </h1>
                <div className="flex justify-center items-center ">
                <img
                    src={product.image}
                    className="w-48 h-48 rounded-md bg-gray-200 object-cover"
                />
                </div>
                <br />
                <p className="text-gray-600 mb-4 ">{product.description}</p>
                <p className="text-gray-600 mb-4 ">Center Position : {product.center}</p>
                <p className="text-lg font-semibold text-gray-700 mb-6">
                    Price: ${product.price}
                </p>
                <Link
                    href="/products"
                    className="inline-block px-4 py-2 bg-violet-950 text-white font-medium rounded hover:bg-violet-600 transition flex justify-center"
                >
                    ดูสินค้าทั้งหมด
                </Link>
            </div>
        </AuthenticatedLayout>
    );
}
