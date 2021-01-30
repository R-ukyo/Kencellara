from PIL import Image, ImageFilter
import os
import glob

# png to jpg
pngFiles = glob.glob("./*.png")
for file in pngFiles:
    fileName = os.path.splitext(os.path.basename(file))[0]
    saveFile = fileName + '.jpg'
    image = Image.open(file).convert('RGB')
    image.save(saveFile)

# downsize jpg in this dir
jpgFiles = glob.glob("./*.jpg")
for file in jpgFiles:
    saveFile = os.path.basename(file)
    image = Image.open(file)
    if image.width > 200:
        width = 200
        height = int(width * image.size[1] / image.size[0])
        resizedImg = image.resize((width, height))
        resizedImg.save(saveFile, quality=97)
    else:
        resizedImg = image.resize((image.width, image.height))
        resizedImg.save(saveFile, quality=97)
