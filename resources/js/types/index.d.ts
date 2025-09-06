import { InertiaLinkProps } from '@inertiajs/vue3';
import type { LucideIcon } from 'lucide-vue-next';

export interface Auth {
    user: User;
}

export interface BreadcrumbItem {
    title: string;
    href: string;
}

export interface NavItem {
    title: string;
    href: NonNullable<InertiaLinkProps['href']>;
    icon?: LucideIcon;
    isActive?: boolean;
}

export type AppPageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    name: string;
    quote: { message: string; author: string };
    auth: Auth;
    sidebarOpen: boolean;
};

export interface User {
    id: number;
    name: string;
    email: string;
    avatar?: string;
    email_verified_at: string | null;
    created_at: string;
    updated_at: string;
}

export type BreadcrumbItemType = BreadcrumbItem;

export interface Player {
    code: string,
    name: string,
    position: string,
    player_default_image: string
}

export interface Team {
    code: string,
    name: string,
    team_default_image: string
}

export interface PlayerCard {
    player: Player,
    team: Team,

    overall_rating: number,
    micro_rating: number,
    macro_rating: number,
    teamplay_rating: number,
    leadership_rating: number,
    creativity_rating: number,
    adaptability_rating: number,
    consistency_rating: number,

    rarity: string,
    card_type: string,
    release_date: string,
    season: string,
    tournament: string,

    player_card_image: string
}
