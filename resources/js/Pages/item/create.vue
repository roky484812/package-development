<template>
    <h4>Create a Item</h4>
    <form @submit.prevent="submit">
        <div>
            <label for="name">Enter Item Name</label><br>
            <input type="text" id="name" placeholder="Enter name" v-model="form.name">
            <div v-if="form.errors.name">{{ form.errors.name }}</div>
        </div>
        <div>
            <label for="price">Enter Item Price</label><br>
            <input type="text" id="price" placeholder="Enter price" v-model="form.price">
            <div v-if="form.errors.price">{{ form.errors.price }}</div>
        </div>
        <BranchEnrollment v-model="form.branch" />
        <button type="submit">Create Item</button>
    </form>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
import BranchEnrollment from "@/Pages/branch/components/BranchEnrollment.vue";

// Initialize form state with useForm
const form = useForm({
    name: "",
    price: "",
    branch: [],
});

const submit = () => {
    form.post(route("item.store"), {
        onSuccess: (result) => {
            console.log("Form submitted successfully", result);
            form.reset();
        },
        onError: () => {
            console.log("Error submitting the form");
        },
    });
};
</script>

<style scoped>
div {
    margin-bottom: 1rem;
}
label {
    font-weight: bold;
}
input {
    width: 50%;
    padding: 0.5rem;
    margin-top: 0.5rem;
}
button {
    padding: 0.5rem 1rem;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}
button:hover {
    background-color: #0056b3;
}
</style>
