/**
 * Clear a text area button
 */
const clearPostsButton = document.getElementById('wp-learn-clear-posts');
if (typeof(clearPostsButton) != 'undefined' && clearPostsButton != null)
{
    clearPostsButton.addEventListener('click',function()
        {
            const textarea = document.getElementById('wp-learn-posts');
            textarea.value = '';
        }
    );
}