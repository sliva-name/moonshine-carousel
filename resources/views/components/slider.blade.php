@props([
    'items' => null,
    'itemPerRow' => 3,
    'itemWidth' => 20,
    'loop' => false,
    'nav' => false,
])

<div class="own-carousel__container mb-4" data-row="{{ $itemPerRow }}" data-width="{{ $itemWidth }}" data-loop="{{ $loop }}" data-nav="{{ $nav }}">
    <div class="own-carousel__outer">
        <div class="own-carousel">
            @foreach($items as $item)
                @continue(!isSeeWhenExists($item))
                <div class="own-carousel__item">{{ $item->render() }}</div>
            @endforeach
        </div>
    </div>
    @if($nav)
        <div class="own-carousel__control">
            <button class="control__prev">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                    <path d="M14.2893 5.70708C13.8988 5.31655 13.2657 5.31655 12.8751 5.70708L7.98768 10.5993C7.20729 11.3805 7.2076 12.6463 7.98837 13.427L12.8787 18.3174C13.2693 18.7079 13.9024 18.7079 14.293 18.3174C14.6835 17.9269 14.6835 17.2937 14.293 16.9032L10.1073 12.7175C9.71678 12.327 9.71678 11.6939 10.1073 11.3033L14.2893 7.12129C14.6799 6.73077 14.6799 6.0976 14.2893 5.70708Z" fill="#0F0F0F"/>
                </svg>
            </button>
            <button class="control__next">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                    <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" fill="#0F0F0F"/>
                </svg>
            </button>
        </div>
    @endif
</div>
