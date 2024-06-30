<template>
    <h4>Select Branch</h4>
    <div v-for="branch in branches">
        <input 
        type="checkbox" 
        :value="branch.id" 
        :id="branch.id" 
        @change="toggleSelection(branch.id)"
        :checked="modelValue.includes(branch.id)">
        <label :for="branch.id">{{ branch.name }}</label>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: 'BranchEnrollment',
        props: {
            modelValue: {
                type: Array,
                required: true
            }
        },
        data() {
            return {
                branches: []
            };
        },
        mounted() {
            this.fetchData();
        },
        watch(){
            console.log(modelValue);
        },
        methods: {
            async fetchData() {
                try {
                    const url = route('api.branch.list');
                    const response = await axios.get(url);
                    this.branches = response.data; // Assign response.data to this.branches
                    console.log(this.branches);
                } catch (error) {
                    console.error('Error fetching data:', error);
                }
            },
            toggleSelection(branchId) {
                const newSelection = [...this.modelValue];
                const index = newSelection.indexOf(branchId);
                if (index > -1) {
                    newSelection.splice(index, 1); // Remove if already selected
                } else {
                    newSelection.push(branchId); // Add if not selected
                }
                this.$emit('update:modelValue', newSelection);
            }
        }
    }
</script>
<style scoped>
    h4 {
        margin-bottom: 10px;
    }
    div {
        margin-bottom: 5px;
    }
    label {
        margin-left: 5px;
    }
</style>