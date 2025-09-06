<script setup lang="ts">
import { edit } from '@/routes/profile';
import { Head, usePage } from '@inertiajs/vue3';

import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem, PlayerCard } from '@/types';
import PCard from '@/components/PCard.vue';

interface Props {
    cards: PlayerCard[];
}

defineProps<Props>();

const breadcrumbItems: BreadcrumbItem[] = [
    {
        title: 'Liste des cartes',
        href: edit().url,
    },
];

const page = usePage();
const playerCards = page.props?.cards?.data as PlayerCard[];
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbItems">
        <Head title="Liste des cartes" />

        <div class="pcard-container">
            <PCard v-for="card in playerCards" :key="card.id" :card="card" class="mb-4" />
        </div>
    </AppLayout>
</template>

<style scoped>
.pcard-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 1rem;
}
</style>
