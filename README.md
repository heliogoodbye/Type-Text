# Type-Text

Created just for fun, **Type Text** is a WordPress plugin designed to simulate the effect of text being typed out on a typewriter. It allows users to create dynamic and engaging textual content on their WordPress websites. 

Key features of the plugin include:

1. **Shortcode Integration**: Users can easily integrate the typing effect into their posts, pages, or custom post types using a simple shortcode.

2. **Customizable Text**: Users can specify the text they want to display with the typing effect through shortcode attributes.

3. **Typing Animation**: The plugin animates the text, character by character, giving the impression that it is being typed in real-time.

4. **Adjustable Speed**: Users can control the speed of the typing animation by adjusting the delay between each character.

5. **Intersection Observer Integration**: The plugin utilizes the Intersection Observer API to trigger the typing animation when the section containing the shortcode comes into focus in the browser viewport. This ensures a smooth and efficient user experience by only initiating the animation when necessary.

Overall, the "Type Text" plugin enhances the visual appeal of textual content on WordPress websites by adding a dynamic and engaging typing effect, which can help capture the attention of visitors and make the content more memorable.

---

## How to use Type Text

Using the "Type Text" plugin in your WordPress website is straightforward. Here's a step-by-step guide:


1. Installation:
    - Download the plugin zip file.
    - Go to your WordPress dashboard.
    - Navigate to `"Plugins" > "Add New"`.
    - Click on the "Upload Plugin" button and select the downloaded zip file.
    - Activate the plugin.

2. **Create Typing Text**:
   - In the post editor or page editor, create a new post or edit an existing one where you want to add the typing text effect.
   - Inside the content area, add the shortcode `[type_text]` where you want the typing effect to appear.
   - Customize the text by adding the `text` attribute to the shortcode. For example: `[type_text text="Hello, world!"]`.

3. **Adjust Animation Settings (Optional)**:
   - By default, the plugin uses a delay of 100 milliseconds between typing each character. If you want to adjust the speed, you can modify the `delay` variable in the plugin code.
   - You can also customize the appearance of the typing text by adding CSS styles to your WordPress theme.

4. **Publish or Update**:
   - Once you've added the shortcode and customized the text, publish your post or update the existing post/page to see the typing text effect in action.

5. **View the Result**:
   - Visit the published post or page on the front end of your website to see the typing animation effect. The text will appear as if it's being typed out letter by letter.

6. **Intersection Observer Integration (Optional)**:
   - If you want the typing animation to start when the section containing the shortcode comes into view in the browser viewport, ensure that the Intersection Observer API is supported in your users' browsers.

By following these steps, you can easily use the "Type Text" plugin to add dynamic typing text effects to your WordPress website, enhancing its visual appeal and engaging your visitors.


---

## Disclaimer

This WordPress plugin is provided without warranty. As the program is licensed free of charge, there is no warranty for the program, to the extent permitted by applicable law. The entire risk as to the quality and performance of the program is with you. Should the program prove defective, you assume the cost of all necessary servicing, repair, or correction.

In no event unless required by applicable law or agreed to in writing will the authors or copyright holders be liable to you for damages, including any general, special, incidental, or consequential damages arising out of the use or inability to use the program (including but not limited to loss of data or data being rendered inaccurate or losses sustained by you or third parties or a failure of the program to operate with any other programs), even if such holder or other party has been advised of the possibility of such damages.
