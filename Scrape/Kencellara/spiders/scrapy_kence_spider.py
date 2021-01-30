import scrapy
import os, urllib, time
import numpy as np
import pdb
# デバッグ
# pdb.set_trace()
import re
from Kencellara.items import KencellaraItem
from scrapy.spiders import Rule
from scrapy.linkextractors import LinkExtractor

# ディレクトリ: cd Kencellara/Scrape
# 実行コマンド: scrapy crawl scrapy_kence_spider
class ScrapyKenceSpiderSpider(scrapy.Spider):
    name = 'scrapy_kence_spider'
    allowed_domains = ['www.kencellara.com']
    start_urls = ['https://www.kencellara.com']
    dest_dir = './images'
    rules = [Rule(LinkExtractor(), callback='parse', follow=True)]

    def parse(self, response):
        # ダウンロードする画像のフォルダ名
        response_url = response.url
        folder_name = response_url[response_url.rfind('/') + 1:]
        if folder_name != '':
            for image in response.css('img'):
                # ダウンロードするファイルのURL
                image_url = image.css('::attr(src)').extract_first().strip()
                # ダウンロードする画像のファイル名
                file_name = image_url[image_url.rfind('/') + 1:]
                if 'http' in file_name:
                    continue
                elif '20150905143148' in file_name:
                    continue
                elif '2021010723' in file_name:
                    continue
                elif '20210108001220' in file_name:
                    continue
                elif '20210109122' in file_name:
                    continue
                elif '2021011000' in file_name:
                    continue
                elif '20200813103255' in file_name:
                    continue
                else:
                    # 画像のダウンロード先が存在しない場合は作成する
                    dest_dir = self.dest_dir + '/' + folder_name
                    print(dest_dir)
                    if not os.path.exists(dest_dir):
                        os.mkdir(dest_dir)
                    # ダウンロード
                    urllib.request.urlretrieve(image_url, os.path.join(dest_dir, file_name))
                    # ダウンロード間隔は1秒
                    time.sleep(1)
        for href in response.xpath('//a/@href').extract():
            url = response.urljoin(href)
            if '%' in url:
                continue
            yield scrapy.Request(url, callback=self.parse)
