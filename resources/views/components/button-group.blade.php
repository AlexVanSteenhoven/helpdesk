<div x-data="{ activeTab: 'tab1' }">
    <button
        x-on:click="activeTab = 'tab1'"
        :class="{ 'bg-blue-500': activeTab === 'tab1', 'text-white': activeTab === 'tab1', 'hover:bg-blue-600': activeTab !== 'tab1' }"
        class="py-2 px-4 rounded-l focus:outline-none"
    >
        Tab 1
    </button>
    <button
        x-on:click="activeTab = 'tab2'"
        :class="{ 'bg-blue-500': activeTab === 'tab2', 'text-white': activeTab === 'tab2', 'hover:bg-blue-600': activeTab !== 'tab2' }"
        class="py-2 px-4 focus:outline-none"
    >
        Tab 2
    </button>
    <button
        x-on:click="activeTab = 'tab3'"
        :class="{ 'bg-blue-500': activeTab === 'tab3', 'text-white': activeTab === 'tab3', 'hover:bg-blue-600': activeTab !== 'tab3' }"
        class="py-2 px-4 rounded-r focus:outline-none"
    >
        Tab 3
    </button>
</div>
