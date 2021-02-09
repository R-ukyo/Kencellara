from PIL import Image, ImageFilter
import os
import glob
import sys

width = int(sys.argv[1])

# png to jpg
pngFiles = glob.glob("./*.png")
for file in pngFiles:
    fileName = os.path.splitext(os.path.basename(file))[0]
    saveFile = fileName + '.jpg'
    image = Image.open(file).convert('RGB')
    image.save(saveFile)

# downsize jpg in this dir
jpgFiles = glob.glob("./*.jpg")
for file in pngFiles:
    saveFile = os.path.basename(file)
    image = Image.open(file)
    if len(sys.argv) == 3:
        height = int(sys.argv[2])
    else:
        height = int(width * image.size[1] / image.size[0])
    resizedImg = image.resize((width, height))
    resizedImg.save(saveFile, quality=97)
