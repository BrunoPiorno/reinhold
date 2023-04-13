<?php if( $heart_link = get_field('heart_link', 'option')): ?>
    <a class="heart_link" href="<?php echo $heart_link['url']; ?>" target="<?php echo ($heart_link['target'] == '_blank')? '_blank':'_self'; ?>">
        <svg ill="#606A6E" width="25" height="25" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Heart">
                    <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"></rect>
                    <path d="M19.4558,12.7507 C21.5147,10.7488 21.5147,7.50319 19.4558,5.50135 C17.397,3.4995 14.0588,3.49958 11.9999975,5.50142 C9.94109,3.49958 6.60301,3.49958 4.54415,5.50142 C2.48528,7.50326 2.48528,10.7489 4.54415,12.7507 C4.55132,12.7577 4.55851,12.7647 4.56571,12.7716 L11.9999975,20.0000012 L19.4558,12.7507 Z" id="Shape" stroke="#0C0310" stroke-width="2" stroke-linecap="round"></path>
                </g>
            </g>
        </svg>
    </a>
<?php endif; ?>