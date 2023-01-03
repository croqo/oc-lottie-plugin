# Lottie

This __October CMS__ plugin allows to add Lottie animations on your website with ease.

![og-image](https://raw.githubusercontent.com/croqo/oc-lottie-plugin/dev/sources/og-image.png)

🤔 [What is Lottie? @lottiefiles.com](https://lottiefiles.com/what-is-lottie)

## Component Player

Use this code in INI section to inject JS player into current page/partial/layout.

```ini
[lottie]
```

When it's done, you can use Lottie player as many times as you want with different values of **url** property.

+ ### __url__

    HTTP link to lottie animation json.

    Next example code will generate two animations following one-by-one:

    ```twig
    {% component 'lottie' url='https://path.to/file1.json' %}

    {% component 'lottie' url='https://path.to/file2.json' %}
    ```

+ ### __look__

    Lottie player CSS preset
    
    ```twig
    {% component 'lottie' url='https://path.to/file1.json' look='image' %}}

    {% component 'lottie' url='https://path.to/file2.json' look='wallpaper' %}}
    ```
    
+ ### aspect __ratio__

    preserveAspectRatio option (rendererSettings)
    
    ```twig
    {% component 'lottie' url='https://path.to/file1.json' ratio='xMidYMid slice' %}}    
    
    {% component 'lottie' url='https://path.to/file2.json' ratio='xMidYMid meet' %}}
    ```
