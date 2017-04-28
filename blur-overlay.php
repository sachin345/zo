<style>
    .blur {
        filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius='3');
        -webkit-filter: url(#blur-filter);
        filter: url(#blur-filter);
        -webkit-filter: blur(3px);
        filter: blur(3px);
    }
    .blur-svg {
        display: none;
    }
</style>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="blur-svg">
    <defs>
        <filter id="blur-filter">
            <feGaussianBlur stdDeviation="3"></feGaussianBlur>
        </filter>
    </defs>
</svg>
<div class="blur">
    <h3>Example</h3>
    <p>This example shows the effect.</p>
</div>